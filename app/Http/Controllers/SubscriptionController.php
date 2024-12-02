<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userplan;
use App\Models\Plan;
use App\Models\User;
use Stripe\Checkout\Session;
use App\Models\Transaction;
use Stripe\Stripe;
use Stripe\Product;
use Stripe\Price;
use Stripe\Subscription;
use Illuminate\Support\Facades\Log;
use Stripe\Exception\SignatureVerificationException;
use Stripe\Webhook;
use Carbon\Carbon;
use Stripe\StripeClient;


class SubscriptionController extends Controller
{
   //index page
    public function index(Request $request)
    {
        $plans = Plan::all();
        $user = auth()->guard('web')->user();
        $selectedPlan = null;
        $transactions = null;
        if ($user) {
            $selectedPlan = $user->userplan->first();
            $transactions = $user->transactions;
        }
        return view('mysubscription.index', compact('plans', 'selectedPlan', 'transactions'));
    }

    
    ////subscription handle
    public function upgrade(Request $request)
    {
        $currentPlan = Userplan::where('user_id', auth()->guard('web')->user()->id)->first();
        $plans = Plan::all();
        return view('mysubscription.upgrade', compact('plans','currentPlan'));
    }


    //subscription create
    public function show(Request $request, $id, $url_to)
    {
        try {
            // Set your Stripe API key
            \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
            
            // Get the authenticated user
            $user = auth()->guard('web')->user();
            if ($user->stripe_id) {
                try {
                    $existingCustomer = \Stripe\Customer::retrieve($user->stripe_id);
                    $customer = $existingCustomer;
                } catch (\Stripe\Exception\InvalidRequestException $e) {
                    $customer = \Stripe\Customer::create([
                        'name' => $user->first_name,
                        'email' => $user->email,
                    ]);
                    $user->stripe_id = $customer->id;
                    $user->save();
                }
            } else {
                $customer = \Stripe\Customer::create([
                    'name' => $user->first_name,
                    'email' => $user->email,
                ]);
                $user->stripe_id = $customer->id;
                $user->save();
            }
            
            // Find the plan
            $plan = Plan::find($id);
    
            $redirectUrl = route('subscription.create') . '?session_id={CHECKOUT_SESSION_ID}';
            $response = \Stripe\Checkout\Session::create([
                'success_url' => $redirectUrl,
                'cancel_url' => route('mysubscriptions.index'),
                'customer' => $user->stripe_id,
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'USD',
                            'unit_amount' => $plan->price * 100,
                            'product_data' => [
                                'name' => $plan->name,
                                'description' => $plan->description,
                            ],
                        ],
                        'quantity' => 1
                    ],
                ],
                'mode' => 'payment',
                'allow_promotion_codes' => true,
                'payment_intent_data' => [
                    'description' => 'One time payment',
                ],
                'metadata' => [
                    'plan_id' => $plan->id,
                    'plan_price' => $plan->price,
                    'url_send' => $url_to,
                ],
            ]);
            
            // Redirect the user to the subscription checkout page
            return redirect()->away($response->url);
        } catch (\Stripe\Exception\ApiConnectionException $e) {
            // Log the error
            \Log::error('Stripe API connection error: ' . $e->getMessage());
            
            // Display a user-friendly error message
            return back()->with('error', 'Could not connect to Stripe. Please try again later.');
        }
    }



    
    //subscription response
    public function subscription(Request $request)
    {
       \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
        
        $sessionId = $request->session_id;
        $session = Session::retrieve($sessionId);
        
        $paymentIntentId = $session->payment_intent;
        $paymentIntent = \Stripe\PaymentIntent::retrieve($paymentIntentId);
        $metadata = $session->metadata ?? [];
        $customerId = $session->customer;
        $paymentMethodId = $paymentIntent->payment_method;
        
        $paymentMethod = \Stripe\PaymentMethod::retrieve($paymentMethodId);
        $user = User::where('id', auth()->guard('web')->user()->id)->first();
        $user->pm_type = $paymentMethod->card->brand;
        $user->pm_last_four = $paymentMethod->card->last4;
        $user->save();
       
        $update = Userplan::where('user_id', auth()->guard('web')->user()->id)->first();

        if($update){
            Userplan::where('user_id', auth()->guard('web')->user()->id)->update([
                'plan_id' => $metadata['plan_id'],
                'payment_id' => $paymentIntent->id,
                'price' =>   $metadata['plan_price'],
                'from_date' => null,
                'to_date' => null
            ]);
        }else{
            Userplan::create([
                'user_id' => $user->id,
                'plan_id' => $metadata['plan_id'],
                'payment_id' => $paymentIntent->id,
                'price' => $metadata['plan_price'],
                'from_date' => null,
                'to_date' => null
            ]);
        }

        // Create transaction record
        $transaction = new Transaction();
        $transaction->user_id = $user->id;
        $transaction->plan_id = $metadata['plan_id'];
        $transaction->payment_id = $paymentIntent->id;
        $transaction->payment_status = $session->payment_status;
        $transaction->amount = $metadata['plan_price'];
        $transaction->date = date('Y-m-d', $paymentIntent->created);
        $transaction->save();

        $completion_status = json_decode(auth()->guard('web')->user()->completion_status, true);
        $completion_status['choosePlan'] = 1;
        User::where('id', auth()->guard('web')->user()->id)->update([
            'completion_status' => json_encode($completion_status)
        ]);

        if ($session->payment_status !== 'paid') {
            if($metadata['url_send'] == 'manage')
            {
                return redirect()->route('mysubscriptions.index')->with('error', 'Payment not Done successfully.');
            }else{
                return redirect()->route('create-resume', ['flag' => 'choosePlan']);
            }
        }

        if($metadata['url_send'] == 'manage')
            {
                return redirect()->route('mysubscriptions.index')->with('success', 'Payment done successfully! Now you can add your Job Preferences.');
            }else{
                return redirect()->route('create-resume', ['flag' => 'contact_information']);
            }

    }

    //subscription cancel
    public function cancel(Request $request)
    {
        $subscription = Userplan::select('subscription_id')->where('user_id', auth()->guard('web')->user()->id)->first();
        if ($subscription && $subscription->subscription_id !== null)
        {   
            $sub_id = $subscription->subscription_id;
            \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
            try {
                $subscription = \Stripe\Subscription::retrieve($sub_id);
                $cancelled = $subscription->cancel();
                
                $plan = Plan::where('price_monthly',0)->first();
                $update = Userplan::where('user_id', auth()->guard('web')->user()->id)->first();
                $update->price_monthly = $plan->price_monthly;
                $update->price_annually = $plan->price_annually;
                $update->subscription_id = null;
                $update->to_date = null;
                $update->from_date = null;
                $update->plan_id = $plan->id;
                $update->save();

                return redirect()->route('mysubscriptions.index')->with('success', 'Subscription successfully canceled.');
            } catch (\Exception $e) {
                return redirect()->route('mysubscriptions.index')->with('error', 'Failed to cancel subscription: ' . $e->getMessage());
            }
        } else {
                // Subscription ID is null, redirect with error message
                return redirect()->route('mysubscriptions.index')->with('error', 'You do not have a premium subscription to cancel.');
            }
    }

     //subscription renew    
  public function renew(Request $request)
  {
    $endpointSecret = 'whsec_lCSGZaEk31mNaNXjIn4JDwxqtfvjdzrN';
    $payload = $request->getContent();
    $event = null;

    try {
        $event = Webhook::constructEvent(
            $payload,
            $request->header('Stripe-Signature'),
            $endpointSecret
        );
    } catch (SignatureVerificationException $e) {
        // Invalid signature
        return response()->json(['error' => 'Invalid signature'], 400);
    } catch (\UnexpectedValueException $e) {
        // Invalid payload
        return response()->json(['error' => 'Invalid payload'], 400);
    }

    // Handle the specific event type
    switch ($event->type) {
        case 'customer.subscription.updated':
            $subscriptionObject = $event->data->object;
            
            if ($subscriptionObject['status'] === 'active') {
                // Retrieve necessary information from the subscription data
                $subscriptionId = $subscriptionObject['id'];
                $customerId = $subscriptionObject['customer'];
                $planProduct = $subscriptionObject['plan']['product'];
                $planAmount = $subscriptionObject['plan']['amount'];
                $currentPeriodStart = $subscriptionObject['current_period_start'];
                $currentPeriodEnd = $subscriptionObject['current_period_end'];
                
                
                
                // Retrieve user based on the customer ID (assuming 'stripe_id' is equivalent to 'customer' in the database)
                $user = User::where('stripe_id', $customerId)->first();
                // Retrieve plan based on the plan product
                $plan = Plan::where('stripe_product', $planProduct)->first();
                
                if ($user && $plan) {
                    // Update user's plan details
                    $userPlan = Userplan::where('user_id', $user->id)->first();
                    $userPlan->plan_id = $plan->id;
                    $userPlan->subscription_id = $subscriptionId;
                    $userPlan->price_annually = $planAmount / 100; // assuming plan amount is in cents
                    $userPlan->from_date = date('Y-m-d', $currentPeriodStart);
                    $userPlan->to_date = date('Y-m-d', $currentPeriodEnd);
                    $userPlan->save();
                }
            }
            break;

    case 'invoice.payment_succeeded':
    // Handle payment succeeded event
    $invoice = $event->data->object;

    if ($invoice->status === "paid") {
        // Retrieve necessary information from the invoice
        $customerId = $invoice->customer;
        $subscriptionId = $invoice->subscription;
        $amountPaid = $invoice->amount_paid;
        $createdAt = $invoice->created;
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
        $subscriptionnew = \Stripe\Subscription::retrieve($subscriptionId);
 

        // Retrieve user based on the customer ID
        $user = User::where('stripe_id', $customerId)->first();

        if ($user) {
            // Retrieve plan information from the invoice
            $productID = $invoice->lines->data[0]->plan->product;
            $plan = Plan::where('stripe_product', $productID)->first();
            
            $interval = $invoice->lines->data[0]->plan->interval;

            // Update user's plan details
            $userPlan = UserPlan::where('user_id', $user->id)->first();
            $userPlan->plan_id = $plan->id;
            $userPlan->subscription_id = $subscriptionId;
            if ($interval == 'month') {
                $userPlan->price_monthly = $amountPaid / 100;
            } else {
                $userPlan->price_annually = $amountPaid / 100;
            }
            $userPlan->from_date =  date('Y-m-d',$subscriptionnew->current_period_start);
            $userPlan->to_date = date('Y-m-d', $subscriptionnew->current_period_end);
            $userPlan->save();

            // Create a transaction record
            $transaction = new Transaction();
            $transaction->user_id = $user->id;
            $transaction->plan_id = $plan->id;
            $transaction->subscription_id = $subscriptionId;
            $transaction->amount = $amountPaid / 100;
            $transaction->subscription_type = $interval;
            $transaction->payment_status = 'paid';
            $transaction->date = date('Y-m-d', $subscriptionnew->created);
            $transaction->save();
        }
    }
    break;

    default:
            return response()->json(['error' => 'Received unknown event type ' . $event->type], 400);
    }

    // Respond with a 200 status code
    return response()->json(['success' => true], 200);
}

    
    
   
    
  





 
    



    
    



}

   
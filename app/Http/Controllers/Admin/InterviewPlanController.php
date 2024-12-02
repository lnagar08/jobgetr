<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\InterviewPlan;
use Stripe\Stripe;
use Stripe\Product;
use Stripe\Price;

class InterviewPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Plan = InterviewPlan::orderBy('id','desc')->get();
        return view('admin.InterviewPlan.index',compact('Plan')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.InterviewPlan.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'plan_name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'shared_Interviews' => 'required',
        'description' => 'max:255',
    ]);

    Stripe::setApiKey(config('services.stripe.secret'));

    // Create the product in Stripe with the recurring interval
    $product = Product::create([
        'name' => $validatedData['plan_name'],
        'type' => 'service',
        'metadata' => [
            'description' => $validatedData['description'],
        ],
    ]);

    // Create the price for the product (monthly recurring)
    $price = Price::create([
        'unit_amount' => $validatedData['price'] * 100,
        'currency' => 'usd',
        'recurring' => [
            'interval' => 'month',
        ],
        'product' => $product->id,
    ]);

    // Save the plan details in your database
    $plan = new InterviewPlan();
    $plan->plan_name = $validatedData['plan_name'];
    $plan->price = $validatedData['price'];
    $plan->shared_Interviews = $validatedData['shared_Interviews'];
    $plan->description = $validatedData['description'];
    $plan->stripe_price_id = $price->id;
    $plan->stripe_product_id = $product->id;
    $plan->save();

    return redirect()->route('plan-interview.index')->with('success', 'Plan created successfully! On Stripe Account also.');
}




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InterviewPlan  $InterviewPlan
     * @return \Illuminate\Http\Response
     */
    public function show(InterviewPlan $InterviewPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(InterviewPlan $InterviewPlan,$id)
    {
        $plan = InterviewPlan::find($id);
        return view('admin.InterviewPlan.edit', compact('plan','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InterviewPlan $InterviewPlan, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'plan_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'shared_Interviews' => 'required',
            'description' => 'max:255',
        ]);
        $planToUpdate = InterviewPlan::find($id);
        $planToUpdate->plan_name = $validatedData['plan_name'];
        $planToUpdate->price = $validatedData['price'];
        $planToUpdate->shared_Interviews = $validatedData['shared_Interviews'];
        $planToUpdate->description = $validatedData['description'];
        $planToUpdate->save();
        return redirect()->route('plan-interview.index')->with('success', 'Plan updated successfully! On stripe Please Update Manual');
        
    }


        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\InterviewPlan  $InterviewPlan
         * @return \Illuminate\Http\Response
         */
        public function destroy(InterviewPlan $InterviewPlan,$id)
        {
            InterviewPlan::find($id)->delete();
            return redirect()->route('plan-interview.index')->with('success', 'Plan deleted successfully! On stripe Please delete Manual');
        }
    }

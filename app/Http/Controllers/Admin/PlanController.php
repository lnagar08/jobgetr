<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Plan;
use Stripe\Stripe;
use Stripe\Product;
use Stripe\Price;
class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Plan = Plan::orderBy('id','desc')->get();
        return view('admin.PlanManagement.index',compact('Plan')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.PlanManagement.create'); 
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
            'number_of_job_applications' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'max:255',
        ]);
        
        // Stripe::setApiKey(config('services.stripe.secret'));
        $plan = new Plan();
        $plan->name = $validatedData['plan_name'];
        $plan->number_of_job_applications = $validatedData['number_of_job_applications'];
        $plan->price = $validatedData['price'];
        $plan->description = $validatedData['description'];
        $plan->save();

        // $product = Product::create([
        //     'name' => $validatedData['plan_name'],
        // ]);
        // $price_one_time = Price::create([
        //     'unit_amount' => $validatedData['price'] * 100,
        //     'currency' => 'usd',
        //     'product' => $product->id,
        // ]);
        
        // $update = Plan::find($plan->id);
        // $update->stripe_price_id = $price_one_time->id;
        // $update->stripe_product_id = $product->id;
        // $update->save();
        
        return redirect()->route('plan-management.index')->with('success', 'Plan created successfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan,$id)
    {
        $plan = Plan::find($id);
        return view('admin.PlanManagement.edit', compact('plan','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, plan $plan, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'plan_name' => 'required|string|max:255',
            'number_of_job_applications' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'max:255',
        ]);
        $planToUpdate = Plan::find($id);
        $planToUpdate->name = $validatedData['plan_name'];
        $planToUpdate->number_of_job_applications = $validatedData['number_of_job_applications'];
        $planToUpdate->price = $validatedData['price'];
        $planToUpdate->description = $validatedData['description'];
        $planToUpdate->save();
        return redirect()->route('plan-management.index')->with('success', 'Plan updated successfully!');
        
    }


        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\plan  $plan
         * @return \Illuminate\Http\Response
         */
        public function destroy(plan $plan,$id)
        {
            Plan::find($id)->delete();
        }
    }

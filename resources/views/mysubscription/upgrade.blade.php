@include('layouts/header')
<!-- Display error messages -->
@if(session('error'))
    <div class="text-danger text-center">
        {{ session('error') }}
    </div>
@endif
<!-- Display success message -->
@if(session('success'))
    <div class="text-success text-center">
        {{ session('success') }}
    </div>
@endif
<section class="inner-sec upgradesubscription">
    <div class="container"> 
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="cvform-heading">
                <h2>Manage Payment</h2>
                <H6>Other Plan</h6>
            </div>
        </div>                              
    </div>
    <div class="choosePlan">
        <div class="row">
            @foreach ($plans as $plan)
                    <div class="col-lg-4 col-md-4">
                        <div class="generic_content">
                            <div class="generic_head_price">
                                <div class="generic_head_content">
                                    <span>{{ $plan->name }}</span>
                                </div>
                                <div class="generic_price_tag">
                                    <span class="sign">$</span><span class="currency">{{ $plan->price }}</span><span class="month"></span>
                                </div>
                            </div>
                            <div class="generic_feature_list">
                                <ul>
                                    <li><span>{{ $plan->description }}</span></li>
                                </ul>
                            </div>
                            <div class="generic_price_btn">
                                @if($currentPlan->plan_id == $plan->id && $currentPlan->payment_id != null)
                                <a href="javascript:void(0);" disabled class="btn btn-secondary" style="padding: 13px 110px;border-radius: 65px;">Selected</a>
                                @elseif($currentPlan->plan_id == $plan->id && $currentPlan->payment_id == null) 
                                <a href="{{  route('mysubscriptions.show', ['id'=> $plan->id ,'url_to' => 'manage']) }}" class="btn btn-info">Select</a>
                                @else
                                <a href="{{  route('mysubscriptions.show', ['id'=> $plan->id ,'url_to' => 'manage']) }}" class="btn btn-info">Select</a>
                                @endif
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>    
    </div>
    </div>
</section>
@include('layouts/footer')

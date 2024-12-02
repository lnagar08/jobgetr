@include('layouts/header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<section class="inner-sec upgradesubscription">
    <div class="container"> 
     <div class="row">
         <div class="col-md-12">
             <!-- Display error messages -->
                @if(session('error'))
                    <div class="alert alert-danger text-center">
                        {{ session('error') }}
                    </div>
                @endif
                <!-- Display success message -->
                @if(session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }} 
                        @if(count($transactions) == 0)
                            Please process the payment.
                        @endif 
                        @if($selectedPlan)
                            <a href="{{ route('job-preference.index') }}" class="btn btn-link">Job Preferences</a>
                        @endif
                    </div>
                @endif


             </div>
         </div>
       <div class="row">
            <div class="col-md-12 text-center">
                <div class="cvform-heading">
                    <h2>Manage Payment</h2>
                   @if($selectedPlan)
                    <H6>Selected Plan</h6>
                   @else
                   <H6>Other Plan</h6>
                   @endif
                </div>
            </div>                              
        </div>
        @if($selectedPlan)
        <div class="row">
           <div class="col-lg-12 col-md-12">
                <div class="upgradeplan">
                    <ul>
                        <li class="selectedplanspan"><span>{{ isset($selectedPlan->plan->name) ? $selectedPlan->plan->name : '' }}</span></li>
                        <li class="currencyspan"><span class="sign">$</span><span class="currency">{{ $selectedPlan->price }}</span><span class="month"></span></li>
                        <li class="descriptionspan"><span>{{ isset($selectedPlan->plan->description) ? $selectedPlan->plan->description : '' }}</span></li>
                        <li class="upgradespan"><a href="{{ route('mysubscriptions.upgrade') }}" class="btn btn-info">Upgrade</a></li>
                        </ul>
                    </div>
                <div class="generic_content" style="display:none">
                    <div class="generic_head_price">
                        <div class="generic_head_content">
                               <span>{{ isset($selectedPlan->plan->name) ? $selectedPlan->plan->name : '' }}</span>
                        </div>
                        <div class="generic_price_tag">
                                <span class="sign">$</span><span class="currency">{{ $selectedPlan->price }}</span><span class="month"></span>
                        </div>
                    </div>                            
                    <div class="generic_feature_list">
                        <ul>
                            <li><span>{{ isset($selectedPlan->plan->description) ? $selectedPlan->plan->description : '' }}</span></li>
                        </ul>
                    </div>
                    <div class="generic_price_btn">
                          <ul>
                            <li>
                                <a href="{{ route('mysubscriptions.upgrade') }}" class="btn btn-info">Upgrade</a>
                            </li>
                            <!--<li>-->
                            <!--    <a  href="javascript:void(0);" class="btn btn-info btn-danger">Cancel</a>-->
                            <!--</li>-->
                        </ul>
                    </div>
                </div>
            </div>            
           <div class="col-lg-12 col-md-12"> 
                <div class="transationhistory">
                    <div class="transationhistory-heading"
                        <h2>Transaction History</h2>
                    </div>
                    <div class="table-responsive tabledesign">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Plan name</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $jobGetrCount = 0;
                                @endphp
                                
                                @foreach($transactions as $key => $transaction)
                                    @if(!preg_match('/^interview_\d+/', $transaction->plan_id))
                                        <tr>
                                            <td>{{ $jobGetrCount + 1 }}</td>
                                            <td>{{ $transaction->plan ? $transaction->plan->name : '' }}</td>
                                            <td>$ {{ $transaction->amount ?: 'N/A' }}</td>
                                            <td>{{ $transaction->date ?: '' }}</td>
                                        </tr>
                                        @php
                                            $jobGetrCount++;
                                        @endphp
                                    @endif
                                @endforeach
                                
                                @if($jobGetrCount === 0)
                                    <tr>
                                        <td colspan="4" style="text-align: center">No data found</td>
                                    </tr>
                                @endif



                            </tbody>
                        </table>
                    </div>
                </div>
           </div>
        </div>
        @else
        <div class="row">
            @foreach ($plans as $plan)
                <div class="col-lg-4 col-md-12">
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
                                    <a href="{{  route('mysubscriptions.show', ['id'=> $plan->id ,'url_to' => 'manage']) }}" class="btn btn-info">Select</a>
                                </div>
                            </div>
                        </div>
            @endforeach
            <div class="col-md-12"> 
            <div class="transationhistory transationhistory-12">
              <h2>Transation History</h2>
                <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Plan name</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $jobGetrCount = 0;
                                @endphp
                                
                                @foreach($transactions as $key => $transaction)
                                    @if(!preg_match('/^interview_\d+/', $transaction->plan_id))
                                        <tr>
                                            <td>{{ $jobGetrCount + 1 }}</td>
                                            <td>{{ $transaction->plan ? $transaction->plan->name : '' }}</td>
                                            <td>$ {{ $transaction->amount ?: 'N/A' }}</td>
                                            <td>{{ $transaction->date ?: '' }}</td>
                                        </tr>
                                        @php
                                            $jobGetrCount++;
                                        @endphp
                                    @endif
                                @endforeach
                                
                                @if($jobGetrCount === 0)
                                    <tr>
                                        <td colspan="4" style="text-align: center">No data found</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
            </div>
           </div>
        </div>
        @endif
    </div>
</section>
@include('layouts/footer')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('.table').DataTable({
            "paging": true,
            "ordering": true,
            "pageLength": 10
        });
    });
    function confirmCancellation(cancelUrl) {
        if (confirm("Are you sure you want to cancel your subscription?")) {
            window.location.href = cancelUrl;
        }
    }
     $(document).ready(function() {
        $("#Interviewbtn").click(function() {
            $(this).removeClass("btn-link text-dark").addClass("btn-primary text-white");
            $("#JobGetrbtn").removeClass("btn-primary text-white").addClass("btn-link text-dark");
               $("#JobGetrscreen").hide();
            $("#Interviewscreen").show();
            
        });

        $("#JobGetrbtn").click(function() {
            $(this).removeClass("btn-link text-dark").addClass("btn-primary text-white");
            $("#Interviewbtn").removeClass("btn-primary text-white").addClass("btn-link text-dark");
            $("#JobGetrscreen").show();
            $("#Interviewscreen").hide();
        });
    });
</script> 

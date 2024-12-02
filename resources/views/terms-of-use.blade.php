@include('layouts/header') 

@php
    // Fetch the content from the database
    $TermsofUse = App\Models\PageManager::where('key', 'TermsofUse')->first();  
@endphp

@if($TermsofUse->status == 1)
<section class="innerbanner" style="background: url('{{asset('assets/images/inresume.jpg')}}');">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="innerheading">
            <h2>Terms of Use</h2>
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Terms of Use</li>
            </ul>
            </div>
            <h1 style="text-align: center;color: red;font-weight: bold;">This Page is not available</h1>
        </div>
        </div>
    </div>
</section>
@else
{!! $TermsofUse->content !!}
@endif
@include('layouts/footer') 



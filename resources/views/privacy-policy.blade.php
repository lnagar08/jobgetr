@include('layouts/header') 

@php
    // Fetch the content from the database
    $privacypolicy = App\Models\PageManager::where('key', 'privacypolicy')->first();  
@endphp

@if($privacypolicy->status == 1)
<section class="innerbanner" style="background: url('{{asset('assets/images/inresume.jpg')}}');">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="innerheading">
            <h2>Privacy Policy</h2>
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Privacy Policy</li>
            </ul>
            </div>
            <h1 style="text-align: center;color: red;font-weight: bold;">This Page is not available</h1>
        </div>
        </div>
    </div>
</section>
@else
{!! $privacypolicy->content !!}
@endif
@include('layouts/footer') 



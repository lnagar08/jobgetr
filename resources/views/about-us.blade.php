@include('layouts/header') 

@php
    // Fetch the content from the database
    $aboutus = App\Models\PageManager::where('key', 'AboutUs')->first();  
@endphp

@if($aboutus->status == 1)
<section class="innerbanner" style="background: url('{{asset('assets/images/inresume.jpg')}}');">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="innerheading">
            <h2>About us</h2>
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>About us</li>
            </ul>
            </div>
            <h1 style="text-align: center;color: red;font-weight: bold;">This Page is not available</h1>
        </div>
        </div>
    </div>
</section>
@else
{!! $aboutus->content !!}
@endif
@include('layouts/footer') 


@include('layouts/header') 

@php
    // Fetch the content from the database
    $FAQ = App\Models\PageManager::where('key', 'FAQ')->first();  
@endphp

@if($FAQ->status == 1)
<section class="innerbanner" style="background: url('{{asset('assets/images/inresume.jpg')}}');">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="innerheading">
            <h2>FAQ</h2>
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>FAQ</li>
            </ul>
            </div>
            <h1 style="text-align: center;color: red;font-weight: bold;">This Page is not available</h1>
        </div>
        </div>
    </div>
</section>
@else
{!! $FAQ->content !!}
@endif
@include('layouts/footer') 



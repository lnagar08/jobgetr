<!DOCTYPE html>
<html lang="en">
@include('admin.includes.head')
<body class="dashboard-analytics">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
        <!--  END LOADER -->
 @include('admin.includes.navbar')
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
 @include('admin.includes.sidebar')
 @yield('content')
 @include('admin.includes.footer')
 </div>
        <!-- END MAIN CONTAINER -->
    </body>
</html>
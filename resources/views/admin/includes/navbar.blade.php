<!--  BEGIN NAVBAR  -->
<div class="header-container fixed-top">
            <header class="header navbar navbar-expand-sm">
                <ul class="navbar-item flex-row">
                    <li class="nav-item theme-logo">
                        <a href="javascript:void(0);" onclick=" window.location.reload();">
                            <img src="{{asset('/assets/images/logo.png')}}" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                </ul>

                <a href="javascript:void(0);" data-click="1" class="sidebarCollapse sidebar_collapse_btn" id="navbtn" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg></a>

                <ul class="navbar-item flex-row search-ul">
                    <!-- <li class="nav-item align-self-center search-animated">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        <form class="form-inline search-full form-inline search" role="search">
                            <div class="search-bar">
                                <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                            </div>
                        </form>
                    </li> -->
                </ul>
                <ul class="navbar-item flex-row navbar-dropdown">

                    <!--<li class="nav-item dropdown notification-dropdown">-->
                    <!--    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                    <!--        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>-->
                    <!--    </a>-->
                    <!--    <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="notificationDropdown">-->
                    <!--        <div class="notification-scroll">-->

                    <!--            <div class="dropdown-item">-->
                    <!--                <div class="media server-log">-->
                    <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>-->
                    <!--                    <div class="media-body">-->
                    <!--                        <div class="data-info">-->
                    <!--                            <h6 class="">Server Rebooted</h6>-->
                    <!--                            <p class="">45 min ago</p>-->
                    <!--                        </div>-->

                    <!--                        <div class="icon-status">-->
                    <!--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->

                    <!--            <div class="dropdown-item">-->
                    <!--                <div class="media ">-->
                    <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>-->
                    <!--                    <div class="media-body">-->
                    <!--                        <div class="data-info">-->
                    <!--                            <h6 class="">Licence Expiring Soon</h6>-->
                    <!--                            <p class="">8 hrs ago</p>-->
                    <!--                        </div>-->

                    <!--                        <div class="icon-status">-->
                    <!--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->

                    <!--            <div class="dropdown-item">-->
                    <!--                <div class="media file-upload">-->
                    <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>-->
                    <!--                    <div class="media-body">-->
                    <!--                        <div class="data-info">-->
                    <!--                            <h6 class="">Kelly Portfolio.pdf</h6>-->
                    <!--                            <p class="">670 kb</p>-->
                    <!--                        </div>-->

                    <!--                        <div class="icon-status">-->
                    <!--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</li>-->

                    <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(auth()->guard('admin')->check() && auth()->guard('admin')->user()->profile_image)
                                <img src="{{ auth()->guard('admin')->user()->profile_image }}" alt="admin-profile" class="img-fluid">
                            @else
                                <img src="{{ asset('admin/assets/img/90x90.jpg') }}" alt="admin-profile" class="img-fluid">
                            @endif

                        </a>
                        <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="userProfileDropdown">
                            <div class="user-profile-section">
                               <div class="media mx-auto">
                                    @if(auth()->guard('admin')->check() && auth()->guard('admin')->user()->profile_image)
                                        <img src="{{ auth()->guard('admin')->user()->profile_image }}" class="img-fluid mr-2" alt="avatar">
                                    @else
                                        <img src="{{ asset('admin/assets/img/90x90.jpg') }}" class="img-fluid mr-2" alt="avatar">
                                    @endif

                                    <div class="media-body">
                                        @if(auth()->guard('admin')->check() && auth()->guard('admin')->user()->first_name)
                                            <h5>{{ auth()->guard('admin')->user()->first_name }}</h5>
                                        @else
                                           <h5>Admin</h5>
                                        @endif
                                        <p>Admin</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <!--<a href="#">-->
                                <!--    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>My Profile</span>-->
                                <!--</a>-->
                            </div>
                            <div class="dropdown-item">
                                <a href="{{url('admin/change-password')}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"/></svg>
                                    <span>Change Password</span>
                                </a>
                            </div>
                            <div class="dropdown-item">
                                <a href="{{url('admin/Logout')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </header>
        </div>
        <!--  END NAVBAR  -->
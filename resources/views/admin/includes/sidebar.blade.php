<style type="text/css">
    #compactSidebar{
     display: none;
    } 
    .sidebar-wrapper #compact_submenuSidebar.show {
    left:0px;
}
.sidebar-wrapper #compact_submenuSidebar {
    position: sticky;
}
#content {
    margin-left: 0px;
}
@media screen and (min-width: 1000px) {
.account-settings-footer {
    width: calc(100% - 265px);
}
}
</style>
<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">
    <nav id="compactSidebar">
    </nav>

    <div id="compact_submenuSidebar" class="submenu-sidebar submenu-sidebar ps show">
        <div class="submenu show" id="dashboard">
            <ul class="submenu-list" data-parent-element="#dashboard"> 
                {{-- <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{url('admin/dashboard')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg> Analytics </a>
                </li> --}}
                <li class="{{ request()->is('admin/user-management*') ? 'active' : '' }}">
                    <a href="{{url('admin/user-management')}}" class="text-dartk"><svg xmlns="http://www.w3.org/2000/svg" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path fill="none" d="M14.023,12.154c1.514-1.192,2.488-3.038,2.488-5.114c0-3.597-2.914-6.512-6.512-6.512c-3.597,0-6.512,2.916-6.512,6.512c0,2.076,0.975,3.922,2.489,5.114c-2.714,1.385-4.625,4.117-4.836,7.318h1.186c0.229-2.998,2.177-5.512,4.86-6.566c0.853,0.41,1.804,0.646,2.813,0.646c1.01,0,1.961-0.236,2.812-0.646c2.684,1.055,4.633,3.568,4.859,6.566h1.188C18.648,16.271,16.736,13.539,14.023,12.154z M10,12.367c-2.943,0-5.328-2.385-5.328-5.327c0-2.943,2.385-5.328,5.328-5.328c2.943,0,5.328,2.385,5.328,5.328C15.328,9.982,12.943,12.367,10,12.367z"></path></svg> User Management </a>
                </li>
                <li class="{{ request()->is('admin/contant-management*') ? 'active' : '' }}">
                    <a href="{{route('contant-management.create')}}" class="text-dartk"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> Content Manager</a>
                </li> 
                <li class="{{ request()->is('admin/plan-management*') ? 'active' : '' }}">
                    <a href="{{route('plan-management.index')}}" class="text-dartk"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg> Plan Management </a>
                </li>
                <li class="{{ request()->is('admin/plan-interview*') ? 'active' : '' }}">
                    <a href="{{route('plan-interview.index')}}" class="text-dartk"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg> Inteview Plan </a>
                </li>
                <li class="{{ request()->is('admin/transaction*') ? 'active' : '' }}">
                    <a href="{{route('transaction.index')}}" class="text-dartk"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg> Transaction </a>
                </li>
                <li class="{{ request()->is('admin/pageManager*') ? 'active' : '' }}">
                    <a href="{{route('pageManager.create')}}" class="text-dartk"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg> Page Manager </a>
                </li>
                <li class="{{ request()->is('admin/questions*') ? 'active' : '' }}">
                    <a href="{{route('questions.index')}}" class="text-dartk"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg> Questions</a>
                </li>
                <li class="{{ request()->is('admin/job-Preferences*') ? 'active' : '' }}">
                    <a href="{{route('job-Preferences.index')}}" class="text-dartk"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-umbrella"><path d="M23 12a11.05 11.05 0 0 0-22 0zm-5 7a3 3 0 0 1-6 0v-7"/></svg> Job Preference</a>
                </li>
                @php
                    $unreadmsg = App\Models\Message::where('receiver_id','1')->where('read_status','false')->count();
                @endphp
                <li class="{{ request()->is('admin/message*') ? 'active' : '' }}">
                    <a href="{{route('amessage.index')}}" class="text-dartk"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>Message @if($unreadmsg > 0) <span class="float-right">(<b class="text-danger"> {{$unreadmsg}} </b>)</span>@endif</a>
                </li>
                <li class="{{ request()->is('admin/settings*') ? 'active' : '' }}">
                    <a href="{{route('settings.create')}}" class="text-dartk"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Settings </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    $('body').delegate('.sidebar_collapse_btn', 'click', function(){
        if($(this).data('click') == 1){
            $('#compact_submenuSidebar').hide();
            $(this).data('click', 0)
        }else{
            $('#compact_submenuSidebar').show();
            $(this).data('click', 1)
        }
    });
</script>
<!--  END SIDEBAR  -->
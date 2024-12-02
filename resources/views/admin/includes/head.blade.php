<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Admin - jobgetr</title>
        <!--<link rel="icon" type="image/x-icon" href=""/>-->
        <link href="{{asset('admin/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{asset('admin/assets/js/loader.js')}}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
        <link href="{{asset('admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/structure.css')}}" rel="stylesheet" type="text/css" class="structure" />
        
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
        <link href="{{asset('admin/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin/assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" class="dashboard-analytics" />
        <link href="{{asset('admin/assets/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" class="dashboard-sales" />
        <link href="{{asset('admin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/forms/theme-checkbox-radio.css')}}">
        <link href="{{asset('admin/assets/css/tables/table-basic.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/table/datatable/datatables.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/table/datatable/dt-global_style.css')}}">
        <link href="{{asset('admin/assets/css/elements/miscellaneous.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/elements/breadcrumb.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/select2/select2.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/dropify/dropify.min.css')}}">
        <link href="{{asset('admin/assets/css/users/account-setting.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/forms/switches.css')}}">
        <link href="{{asset('admin/assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/animate/animate.css')}}">
        <link href="{{asset('admin/plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/components/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <style>   
            .blockui-growl-message {
                display: none;
                text-align: left;
                padding: 15px;
                background-color: #455a64;
                color: #fff;
                border-radius: 3px;
            }
            .blockui-animation-container { display: none; }
            .multiMessageBlockUi {
                display: none;
                background-color: #455a64;
                color: #fff;
                border-radius: 3px;
                padding: 15px 15px 10px 15px;
            }
            .multiMessageBlockUi i { display: block }
        </style>
    </head>

    
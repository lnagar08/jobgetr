            <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2023 <a target="_blank" href="#">jobgetr</a>, All rights reserved.</p>
                    </div>
                    <!--<div class="footer-section f-section-2">-->
                    <!--    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>-->
                    <!--</div>-->
                </div>
            </div>
            <!--  END CONTENT AREA  -->
        </div>
        <!-- END MAIN CONTAINER -->
    
        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="{{asset('admin/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('admin/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/app.js')}}"></script>
        <script src="{{asset('admin/assets/js/custom.js')}}"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->
        
        <script> 
  $(document).ready(function(){
    $("#navbtn").click(function(){
      $(this).toggleClass('change')       
      $(".submenu-sidebar").toggleClass("blue");
    });
  });
</script>

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
       
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src="{{asset('admin/plugins/highlight/highlight.pack.js')}}"></script>
        <script src="{{asset('admin/assets/js/custom.js')}}"></script>
        <script src="{{asset('admin/assets/js/scrollspyNav.js')}}"></script>
        <script src="{{asset('admin/plugins/select2/select2.min.js')}}"></script>
        <!--<script src="{{asset('admin/plugins/select2/custom-select2.js')}}"></script>-->
        <script src="{{asset('admin/plugins/dropify/dropify.min.js')}}"></script>
        <script src="{{asset('admin/plugins/blockui/jquery.blockUI.min.js')}}"></script>
        <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
        <script src="{{asset('admin/assets/js/users/account-settings.js')}}"></script>
        <script>
            checkall('todoAll', 'todochkbox');
            $('[data-toggle="tooltip"]').tooltip()
        </script>
        <script src="{{asset('admin/plugins/table/datatable/datatables.js')}}"></script>
        <script src="{{asset('admin/plugins/blockui/custom-blockui.js')}}"></script>
        <script src="{{asset('admin/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
        <script src="{{asset('admin/plugins/sweetalerts/custom-sweetalert.js')}}"></script>
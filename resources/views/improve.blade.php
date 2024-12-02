@include('layouts/resume-header')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<div class="mainbody containeruse">
    <div class="container">
        <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8" style="margin-bottom:30px">
                <div class="boxdesign">
                    <div class="congratulations">
                        <div class="congratulations-top">
                            <img src="assets/images/successfully.jpg" class="img-fluid" alt="">
                            <h2>Congratulations!</h2>
                            <p>Your resume is complete! Click 'Next' to enter your Job Preferences for jobgetr.ai to begin applying for jobs.</p>
                            <a href="{{ route('job-preference.index') }}"><button class="btn btn-info bg-ornage" ><i class="las la-angle-double-right"></i></i>Next</button></a>
                            <a href="{{ route('download.pdf') }}" target="_blank"><button class="btn btn-info" ><i class="la la-download"></i>Download</button></a>
                            <a href="{{route('share-resume')}}"><button class="btn btn-info sharebtn"><i class="la la-share"></i>Share</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 resumeheight improvepage">
                {!! $preview_render !!}
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>

<script>
    let template_color_code = "<?php echo $template->color_code; ?>";
    let template_line_height = "<?php echo $template->line_height; ?>";
    let template_font_family = "<?php echo $template->font_family; ?>";
    $(document).ready(function(){
        if(template_line_height == 'Dense'){
            $('.template_design p').css('line-height', '25px')
        }else if(template_line_height == 'Normal'){  
            $('.template_design p').css('line-height', '20px')
        }else if(template_line_height == 'Loose'){
            $('.template_design p').css('line-height', '30px')
        }

        if(template_font_family == 'cursive'){
            $('.template_design p, .template_design h1, .template_design h2, .template_design h3, .template_design h4, .template_design h5, .template_design h6, .template_design li, .template_design span').css('font-family',  "Kalam, cursive");
        }else{
            $('.template_design p, .template_design h1, .template_design h2, .template_design h3, .template_design h4, .template_design h5, .template_design h6, .template_design li, .template_design span').css('font-family',  template_font_family);
        }
        if(template_color_code){
            $('.header_clr_chng').css('background-color', template_color_code)
            $('.template_design h2:not(.temp-user-name , .temp_user_static_name h2), .template_design li > span').css('color', template_color_code);
            $('<style>.temp-heading3::after { background: ' + template_color_code + '; }</style>').appendTo('head');
            $('<style>.temp-exp-desclist4 ul li .progress .progress-bar { background: ' + template_color_code + '; }</style>').appendTo('head');
            $('<style>.temp-exp-desclist3 ul li .progress .progress-bar { background: ' + template_color_code + '; }</style>').appendTo('head');
            $('<style>.temp-exp-desclist2 ul li .progress .progress-bar { background: ' + template_color_code + '; }</style>').appendTo('head');
            $('<style>.temp-exp-desclist4 ul li .progress { border: 1px solid ' + template_color_code + '; }</style>').appendTo('head');
            $('<style>.temp-exp-desclist3 ul li .progress { border: 1px solid ' + template_color_code + '; }</style>').appendTo('head');
            $('<style>.temp-exp-desclist2 ul li .progress { border: 1px solid ' + template_color_code + '; }</style>').appendTo('head');
            $('<style>.templates2border { border-bottom: 2px solid ' + template_color_code + '; }</style>').appendTo('head');
        }
        
        $('.temp-exp-desclist4 ul li span').css('color', 'black');
        $('.temp-exp-desclist3 ul li span').css('color', 'black');
        $('.temp-exp-desclist2 ul li span').css('color', 'black');
    });
</script>
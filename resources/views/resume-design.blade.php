@include('layouts/resume-header')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<div class="mainbody">
    <div class="sidebar">
        <div class="boxdesign styletab">
            <div id="accordion" class="tab-content">
                <div class="card">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapse1"><span><img src="{{asset('assets/images/style1.png')}}" class="img-fluid" alt=""></span>Styles</a>
                    </div>
                    <div id="collapse1" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="resumelayout resumestyles">
                                @if(count($resume_templates) > 0)
                                    @foreach($resume_templates as $key => $value)
                                        @php 
                                            $user_selected_template = App\Models\UserResumeTemplate::where('template_id', $value->id)->where('user_id', auth()->guard('web')->user()->id)->first();
                                        @endphp
                                        <li>
                                            <label class="form-check-label"><input type="radio"   data-id="{{$value->id}}" class="form-check-input resume_templates_radio" name="optradio" {{optional($user_selected_template)->template_id == $value->id ? 'checked' : ''}}>
                                                <span>
                                                    <img src="{{$value->template_preview_image ? url('/').'/'.$value->template_preview_image : ''}}" class="img-fluid" alt="">
                                                </span>
                                            </label>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse3"><span><img src="{{asset('assets/images/style3.png')}}" class="img-fluid" alt=""></span>Fonts</a>
                    </div>
                    <div id="collapse3" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="resumelayout resumefonts">
                                <li><label class="form-check-label"><input type="radio" class="form-check-input check_font_line-height" data-value="Dense" name="optradiob" {{($user_selected_resume_templates->line_height == 'Dense') ? 'checked' : ''}}>
                                <span><img src="{{asset('assets/images/font1.png')}}" class="img-fluid" alt="">Dense</span></label></li>
                                <li><label class="form-check-label"><input type="radio" class="form-check-input check_font_line-height" data-value="Normal" name="optradiob" {{($user_selected_resume_templates->line_height == 'Normal') ? 'checked' : ''}}>
                                <span><img src="{{asset('assets/images/font2.png')}}" class="img-fluid" alt="">Normal</span></label></li>
                                <li><label class="form-check-label"><input type="radio" class="form-check-input check_font_line-height" data-value="Loose" name="optradiob" {{($user_selected_resume_templates->line_height == 'Loose') ? 'checked' : ''}}>
                                <span><img src="{{asset('assets/images/font3.png')}}" class="img-fluid" alt="">Loose</span></label></li>
                            </ul>
                            <ul class="resumelayout resumefontfamily">
                                <li><label class="form-check-label"><input type="radio" class="form-check-input check_font_family" data-value="cursive" name="optradioc" {{($user_selected_resume_templates->font_family == 'cursive') ? 'checked' : ''}}>
                                <span><img src="{{asset('assets/images/fontf1.svg')}}" class="img-fluid" alt=""></span></label></li>
                                <li><label class="form-check-label"><input type="radio" class="form-check-input check_font_family" data-value="monospace" name="optradioc" {{($user_selected_resume_templates->font_family == 'monospace') ? 'checked' : ''}}>
                                <span><img src="{{asset('assets/images/fontf2.svg')}}" class="img-fluid" alt=""></span></label></li>
                                <li><label class="form-check-label"><input type="radio" class="form-check-input check_font_family" data-value="system-ui" name="optradioc" {{($user_selected_resume_templates->font_family == 'system-ui') ? 'checked' : ''}}>
                                <span><img src="{{asset('assets/images/fontf3.svg')}}" class="img-fluid" alt=""></span></label></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse4"><span><img src="{{asset('assets/images/style4.png')}}" class="img-fluid" alt=""></span>Colors</a>
                    </div>
                    <div id="collapse4" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="resumelayout resumecolors">
                                <li>
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input check_color_code" name="optradiod" {{($user_selected_resume_templates->color_code == 'rgb(23, 23, 23)') ? 'checked' : ''}}>
                                        <span class="resumecolors1">
                                            <span class="resumecolorssize"></span>
                                        </span>
                                    </label>
                                </li>
                                <li><label class="form-check-label"><input type="radio" class="form-check-input check_color_code" name="optradiod"  {{($user_selected_resume_templates->color_code == 'rgb(2, 132, 199)') ? 'checked' : ''}}>
                                <span class="resumecolors2"><span class="resumecolorssize"></span></span></label></li>
                                <li><label class="form-check-label"><input type="radio" class="form-check-input check_color_code" name="optradiod"  {{($user_selected_resume_templates->color_code == 'rgb(225, 29, 72)') ? 'checked' : ''}}>
                                <span class="resumecolors3"><span class="resumecolorssize"></span></span></label></li>
                                <li><label class="form-check-label"><input type="radio" class="form-check-input check_color_code" name="optradiod"  {{($user_selected_resume_templates->color_code == 'rgb(245, 158, 11)') ? 'checked' : ''}}>
                                <span class="resumecolors4"><span class="resumecolorssize"></span></span></label></li>
                                <li><label class="form-check-label"><input type="radio" class="form-check-input check_color_code" name="optradiod"  {{($user_selected_resume_templates->color_code == 'rgb(13, 148, 136)') ? 'checked' : ''}}>
                                <span class="resumecolors5"><span class="resumecolorssize"></span></span></label></li>
                                <li><label class="form-check-label"><input type="radio" class="form-check-input check_color_code" name="optradiod"  {{($user_selected_resume_templates->color_code == 'rgb(8, 145, 178)') ? 'checked' : ''}}>
                                <span class="resumecolors6"><span class="resumecolorssize"></span></span></label></li>
                                <li><label class="form-check-label"><input type="radio" class="form-check-input check_color_code" name="optradiod"  {{($user_selected_resume_templates->color_code == 'rgb(6, 182, 212)') ? 'checked' : ''}}>
                                <span class="resumecolors7"><span class="resumecolorssize"></span></span></label></li>
                                <li><label class="form-check-label"><input type="radio" class="form-check-input check_color_code" name="optradiod"  {{($user_selected_resume_templates->color_code == 'rgb(212, 212, 216)') ? 'checked' : ''}}>
                                <span class="resumecolors8"><span class="resumecolorssize"></span></span></label></li>
                                <li><label class="form-check-label"><input type="radio" class="form-check-input check_color_code" name="optradiod"  {{($user_selected_resume_templates->color_code == 'rgb(33, 211, 30)') ? 'checked' : ''}}>
                                <span class="resumecolors9"><span class="resumecolorssize"></span></span></label></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rightbody fullbody">
   
        <div class="container">
            <div class="row">
                <div class="col-md-10 resumeheight" id="resume_template_html">
                    @if(count($resume_templates) > 0)
                        @php
                            $templatePath = str_replace('\\', '/', $user_selected_resume_templates->template_path);
                            $viewData = [
                                'user' => @$user,
                                'skills' => @$skills,
                                'employmentHistories' => @$employmentHistories,
                                'educations' => @$educations,
                                'courses' => @$courses,
                                'customSections' => @$customSections,
                                'internships' => @$internships,
                                'languages' => @$languages,
                                'links' => @$links,
                                'references' => @$references,
                            ];
                            
                        @endphp
                        @includeIf($templatePath, $viewData)
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <button class="downloadcv"><i class="la la-download"></i>Download</button> -->
@if(auth()->guard('web')->user())
<form action="{{route('save-template-details')}}" method="post">
    @csrf 
    <input type="hidden" name="template_id" id="template_id" value="{{$user_selected_resume_templates->id}}">
    <input type="hidden" name="layout" id="layout" value="">
    <input type="hidden" name="line_height" id="line_height" value="">
    <input type="hidden" name="font_family" id="font_family" value="">
    <input type="hidden" name="color_code" id="color" value="">
    <button type="submit" class="downloadcv"><i class=""></i>Save & Continue</button>
</form>
@endif
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>

<script>

    $(document).ready(function(){
        $('.check_font_line-height').each(function(){
            if ($(this).is(':checked')) {
                let line_height = $(this).data('value');
                if (line_height == 'Dense') {
                    $('p').css('line-height', '25px');
                } else if (line_height == 'Normal') {
                    $('p').css('line-height', '20px');
                } else if (line_height == 'Loose') {
                    $('p').css('line-height', '30px');
                }
                $('#line_height').val(line_height);
            }
        });
        $('.check_font_family').each(function(){
            if ($(this).is(':checked')) {
                let font_family = $(this).data('value');
                if(font_family == 'cursive'){
                    $('.template_design p, .template_design h1, .template_design h2, .template_design h3, .template_design h4, .template_design h5, .template_design h6, .template_design li, .template_design span').css('font-family', "Kalam, cursive");
                    $('#font_family').val("cursive");
                }else{
                    $('.template_design p, .template_design h1, .template_design h2, .template_design h3, .template_design h4, .template_design h5, .template_design h6, .template_design li, .template_design span').css('font-family', font_family);
                    $('#font_family').val(font_family);
                }
            }
        });
        $('.check_color_code').each(function(){
            if ($(this).is(':checked')) {
                let backgroundColor = $(this).closest('label').find('.resumecolorssize').css('background-color');
                $('.header_clr_chng').css('background-color', backgroundColor);
                $('.template_design h2:not(.temp-user-name, .temp_user_static_name h2), .template_design li > span').css('color', backgroundColor);
                $('#color').val(backgroundColor);
                $('<style>.temp-heading3::after { background: ' + backgroundColor + '; }</style>').appendTo('head');
                $('<style>.temp-exp-desclist4 ul li .progress .progress-bar { background: ' + backgroundColor + '; }</style>').appendTo('head');
                $('<style>.temp-exp-desclist3 ul li .progress .progress-bar { background: ' + backgroundColor + '; }</style>').appendTo('head');
                $('<style>.temp-exp-desclist2 ul li .progress .progress-bar { background: ' + backgroundColor + '; }</style>').appendTo('head');
                $('<style>.temp-exp-desclist4 ul li .progress { border: 1px solid ' + backgroundColor + '; }</style>').appendTo('head');
                $('<style>.temp-exp-desclist3 ul li .progress { border: 1px solid ' + backgroundColor + '; }</style>').appendTo('head');
                $('<style>.temp-exp-desclist2 ul li .progress { border: 1px solid ' + backgroundColor + '; }</style>').appendTo('head');
                $('<style>.templates2border { border-bottom: 2px solid ' + backgroundColor + '; }</style>').appendTo('head');
                $('.temp-exp-desclist4 ul li span').css('color', 'black');
                $('.temp-exp-desclist3 ul li span').css('color', 'black');
                $('.temp-exp-desclist2 ul li span').css('color', 'black');
            }
        });
    });

    // Style Template Choose
    $('body').delegate('.resume_templates_radio', 'click', function(){
        $('.check_font_line-height').each(function(){
            $(this).prop('checked', false)
        });
        $('.check_font_family').each(function(){
            $(this).prop('checked', false)
        });
        $('.check_color_code').each(function(){
            $(this).prop('checked', false)
        });
        let resume_template_id = $(this).data('id');
        $('#template_id').val(resume_template_id);
        $.ajax({
            url: '{{route("choose-resume-template")}}?template_id='+resume_template_id,
            type: 'GET',
            processData: false, 
            contentType: false, 
            success: function(response) {
                $('#resume_template_html').html('');
                $('#resume_template_html').html(response.html);
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    });

    // Font Choose
    $('body').delegate('.check_font_line-height', 'click', function(){
        let line_height = $(this).data('value');
        if(line_height == 'Dense'){
            $('p').css('line-height', '25px')
        }else if(line_height == 'Normal'){  
            $('p').css('line-height', '20px')
        }else if(line_height == 'Loose'){
            $('p').css('line-height', '30px')
        }
        $('#line_height').val(line_height);
    });
    $('body').delegate('.check_font_family', 'click', function(){
        let font_family = $(this).data('value');
        if(font_family == 'cursive'){
            $('.template_design p, .template_design h1, .template_design h2, .template_design h3, .template_design h4, .template_design h5, .template_design h6, .template_design li, .template_design span').css('font-family', "Kalam, cursive");
            $('#font_family').val("cursive");
        }else{
            $('.template_design p, .template_design h1, .template_design h2, .template_design h3, .template_design h4, .template_design h5, .template_design h6, .template_design li, .template_design span').css('font-family', font_family);
            $('#font_family').val(font_family);
        }
    });

    // Color Choose
    $('body').on('click', '.check_color_code', function() {
        let backgroundColor = $(this).closest('label').find('.resumecolorssize').css('background-color');
        $('.header_clr_chng').css('background-color', backgroundColor);
        $('.template_design h2:not(.temp-user-name, .temp_user_static_name h2), .template_design li > span').css('color', backgroundColor);
        $('#color').val(backgroundColor);
        $('<style>.temp-heading3::after { background: ' + backgroundColor + '; }</style>').appendTo('head');
        $('<style>.temp-exp-desclist4 ul li .progress .progress-bar { background: ' + backgroundColor + '; }</style>').appendTo('head');
        $('<style>.temp-exp-desclist3 ul li .progress .progress-bar { background: ' + backgroundColor + '; }</style>').appendTo('head');
        $('<style>.temp-exp-desclist2 ul li .progress .progress-bar { background: ' + backgroundColor + '; }</style>').appendTo('head');
        $('<style>.temp-exp-desclist4 ul li .progress { border: 1px solid ' + backgroundColor + '; }</style>').appendTo('head');
        $('<style>.temp-exp-desclist3 ul li .progress { border: 1px solid ' + backgroundColor + '; }</style>').appendTo('head');
        $('<style>.temp-exp-desclist2 ul li .progress { border: 1px solid ' + backgroundColor + '; }</style>').appendTo('head');
        $('<style>.templates2border { border-bottom: 2px solid ' + backgroundColor + '; }</style>').appendTo('head');
        $('.temp-exp-desclist4 ul li span').css('color', 'black');
        $('.temp-exp-desclist3 ul li span').css('color', 'black');
        $('.temp-exp-desclist2 ul li span').css('color', 'black');
    });

</script>


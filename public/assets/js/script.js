$(document).ready(function () {
    var current_fs, next_fs, previous_fs; // fieldsets
    var current = 1;
    var steps = $("fieldset.cvform").length; // Consider only fieldsets with class 'cvform'

    setProgressBar(current);

    // Get the flag value from the URL
    var urlParams = new URLSearchParams(window.location.search);
    var flagValue = urlParams.get('flag');
    var check_ul_exp = $('.side_bar_lis').data('expire');
    var complation_status = $('.side_bar_lis').data('value');
    var data_user = $('.side_bar_lis').data('user');

    let firstKeyWithValueZero;
    for (const key in complation_status) {
        if (complation_status[key] === 0) {
            firstKeyWithValueZero = key;
            break;
        }
    }
    if(data_user == 1){
        if(firstKeyWithValueZero != 'personalDetai'){
            if(Boolean(complation_status)){
                $("fieldset.cvform").hide();
                $("fieldset.cvform[data-id='" + firstKeyWithValueZero + "']").show();
                current = $("fieldset.cvform").index($("fieldset.cvform[data-id='" + firstKeyWithValueZero + "']")) + 1;
                setProgressBar(current);    
                $("#progressbar li").removeClass("active");
        
                $("#" + firstKeyWithValueZero).addClass("active").prevAll().addClass("active");
                
         
            }
        }
        if(firstKeyWithValueZero == undefined){
            $("fieldset.cvform").hide();
            $("fieldset.cvform[data-id='Additional_section']").show();
            current = $("fieldset.cvform").index($("fieldset.cvform[data-id='Additional_section']")) + 1;
            setProgressBar(current);    
            $("#progressbar li").removeClass("active");
            $("#Additional_section").addClass("active").prevAll().addClass("active");
        }
    }

    if (flagValue && check_ul_exp == 0) {

        $("fieldset.cvform").hide(); // Hide all fieldsets
        $("fieldset.cvform[data-id='" + flagValue + "']").show();
        current = $("fieldset.cvform").index($("fieldset.cvform[data-id='" + flagValue + "']")) + 1;
        setProgressBar(current);
        $("#progressbar li").removeClass("active");
        $("#" + flagValue).addClass("active").prevAll().addClass("active");

    }

    $(document).on("click", "#progressbar li", function () {

        let check_pan_expire = $('.side_bar_lis').data('expire');
        if($(this).data('user') == 1){
            var clickedIndex = $("#progressbar li").index($(this)) + 1;
            $("#progressbar li").removeClass("active");
            $(this).prevAll().addBack().addClass("active");
            $("fieldset").hide();
            $("fieldset.cvform:eq(" + (clickedIndex - 1) + ")").show();
            setProgressBar(clickedIndex);
            current = clickedIndex; // Update current step
        }
    });

    // Event listener for previous button
    $(document).on("click", ".previous", function () {
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        previous_fs.show();
        current_fs.hide();
        setProgressBar(--current);
    });

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar").css("width", percent + "%");
    }
});

$(document).ready(function() {
    
    $(".story1").hide();
    $(".story2").hide();
    //    $(".story3").hide();


    $("#story-selector").change(function() {
        var value = $(this).val();
        if (parseInt(value) == 1) {
            $(".story1").show();
        } else if (parseInt(value) == 2) {
            $(".story2").show();
        }
    });
});
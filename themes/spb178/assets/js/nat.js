$(document).ready(function(){
    $('#div_info_1').hide();
    $('#div_info_2').hide();
    $('#div_info_3').hide();

    $("#button1").click(function () {
        if ($("#div_info_1").is(":hidden")) {
            $("#div_info_1").show("slow");
            $("#div_info_3").hide("slow");
            $("#div_info_2").hide("slow");
        } 
        else {
            $("#div_info_1").hide("slow");
        }
        return false;
    });
});

$(document).ready(function(){
    $("#button2").click(function () {
        if ($("#div_info_2").is(":hidden")) {
            $("#div_info_2").show("slow");
            $("#div_info_3").hide("slow");
            $("#div_info_1").hide("slow");
        } 
        else {
            $("#div_info_2").hide("slow");
        }
        return false;
    });
});

$(document).ready(function(){
    $("#button3").click(function () {
        if ($("#div_info_3").is(":hidden")) {
            $("#div_info_3").show("slow");
            $("#div_info_1").hide("slow");
            $("#div_info_2").hide("slow");
        } 
        else {
            $("#div_info_3").hide("slow");
        }
        return false;
    });
});

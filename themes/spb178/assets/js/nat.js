jQuery(document).ready(function(){
    jQuery('#div_info_1').hide();
    jQuery('#div_info_2').hide();
    jQuery('#div_info_3').hide();

    jQuery("#button1").click(function () {
        if (jQuery("#div_info_1").is(":hidden")) {
            jQuery("#div_info_1").show("slow");
            jQuery("#div_info_3").hide("slow");
            jQuery("#div_info_2").hide("slow");
        } 
        else {
            jQuery("#div_info_1").hide("slow");
        }
        return false;
    });
});

jQuery(document).ready(function(){
    jQuery("#button2").click(function () {
        if (jQuery("#div_info_2").is(":hidden")) {
            jQuery("#div_info_2").show("slow");
            jQuery("#div_info_3").hide("slow");
            jQuery("#div_info_1").hide("slow");
        } 
        else {
            jQuery("#div_info_2").hide("slow");
        }
        return false;
    });
});

jQuery(document).ready(function(){
    jQuery("#button3").click(function () {
        if (jQuery("#div_info_3").is(":hidden")) {
            jQuery("#div_info_3").show("slow");
            jQuery("#div_info_1").hide("slow");
            jQuery("#div_info_2").hide("slow");
        } 
        else {
            jQuery("#div_info_3").hide("slow");
        }
        return false;
    });
});

$(document).ready( function(){
    $("#idioma").hide();
    $("#tipus_tarifa").hide();
    $("#tarifa_video").hide();
    $("#tarifa_cine").hide();
    $("#tarifa_canso").hide();
    $("#tipus_traductor").hide();
    $("#tarifa_traductor").hide();
    $("#tarifa_ajustador").hide();
    $("#tarifa_linguista").hide();
    $("#tarifa_traductor_ajustador").hide();
    $("#tarifa_totes").hide();
    
    $("#rol").click( function(){
        if ($("#rol").val()=='actor'){
            $("#idioma").show();
            $("#tipus_tarifa").show();
            $("#tipus_traductor").hide();
            $("#tarifa_traductor").hide();
            $("#tarifa_ajustador").hide();
            $("#tarifa_linguista").hide();
            $("#tarifa_traductor_ajustador").hide();
            $("#tarifa_totes").hide();
        }
        if ($("#rol").val()=='traductor'){
            $("#idioma").show();
            $("#tipus_traductor").show();
            $("#tipus_tarifa").hide();
            $("#tarifa_video").hide();
            $("#tarifa_cine").hide();
            $("#tarifa_canso").hide();
        };
        if ($("#rol").val()=='director' || $("#rol").val()=='tecnic_sala'){
            $("#idioma").hide();
        };
    });
    
    $("#click_tipus_tarifa").click( function(){
   
        if ($("#click_tipus_tarifa").val()=='video'){
            $("#tarifa_video").show();
            $("#tarifa_cine").hide();
            $("#tarifa_canso").hide();
        };
        if ($("#click_tipus_tarifa").val()=='cine'){
            $("#tarifa_cine").show();
            $("#tarifa_video").hide();
            $("#tarifa_canso").hide();
        };
        if ($("#click_tipus_tarifa").val()=='canso'){
            $("#tarifa_canso").show();
            $("#tarifa_cine").hide();
            $("#tarifa_video").hide();
        };
    });
    
    
});
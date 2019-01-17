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
        }
        if ($("#rol").val()=='traductor'){
            $("#idioma").show();
            $("#tipus_traductor").show();
        };
        if ($("#rol").val()=='director' || $("#rol").val()=='tecnic_sala'){
            $("#idioma").hide();
        };
    });
    
    $("#click_tipus_tarifa").click( function(){
        if ($("#click_tipus_tarifa").val()=='video'){
            $("#tarifa_video").show();
        };
        if ($("#click_tipus_tarifa").val()=='cine'){
            $("#tarifa_cine").show();
        };
        if ($("#click_tipus_tarifa").val()=='canso'){
            $("#tarifa_canso").show();
        };
    });
    
    var cont=0;
    $("#tipus_traductor_trad").on( 'change', function() {
        if( $(this).is(':checked') ) {
            $("#tarifa_traductor").show();
            cont++;
        } else if () {
           $("#tarifa_traductor").hide(); 
           cont--
        }
    });
});
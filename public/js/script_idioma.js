$(document).ready( function(){
    $("#idioma").hide();
    $("#rol").click( function(){
        if ($("#rol").val()=='actor' || $("#rol").val()=='traductor'){
            $("#idioma").show();
        };
        if ($("#rol").val()=='director' || $("#rol").val()=='tecnic_sala'){
            $("#idioma").hide();
        };
    });
});
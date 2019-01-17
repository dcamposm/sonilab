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
    
    var cont=0;
    $("#tipus_traductor_trad").on( 'change', function() {
        if( $(this).is(':checked') ) {
            cont+=1;
            
            switch (cont){
                case 1:
                    $("#tarifa_traductor").show();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").hide();
                    break;
                case 3:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").show();
                    $("#tarifa_totes").hide();
                    break;
                case 7:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").show();
                    break;
                default:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").hide();
                    break;
            }
            
        } else {           
            cont-=1;
            
            switch (cont){                
                case 2:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").show();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").hide();
                    break;
                case 4:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").show();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").hide();
                    break;
                default:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").hide();
                    break;
            }
        }
    });
    
    $("#tipus_traductor_ajus").on( 'change', function() {
        if( $(this).is(':checked') ) {           
            cont+=2;
            
            switch (cont){
                case 2:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").show();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").hide();
                    break;
                case 3:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").show();
                    $("#tarifa_totes").hide();
                    break;
                case 7:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").show();
                    break;
                default:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").hide();
                    break;
            }
        } else {           
            cont-=2;
            
            switch (cont){
                case 1:
                    $("#tarifa_traductor").show();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").hide();
                    break;
                case 4:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").show();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").hide();
                    break;
                default:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").hide();
                    break;
            }
        }
    });
    
    $("#tipus_traductor_ling").on( 'change', function() {
        if( $(this).is(':checked') ) {           
            cont+=4;
            
            switch (cont){
                case 4:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").show();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").hide();
                    break;
                case 7:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").show();
                    break;
                default:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").hide();
                    break;
            }
        } else {           
            cont-=4;
            
            switch (cont){
                case 1:
                    $("#tarifa_traductor").show();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").hide();
                    break;
                case 2:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").show();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").hide();
                    break;
                case 3:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").show();
                    $("#tarifa_totes").hide();
                    break;
                default:
                    $("#tarifa_traductor").hide();
                    $("#tarifa_ajustador").hide();
                    $("#tarifa_linguista").hide();
                    $("#tarifa_traductor_ajustador").hide();
                    $("#tarifa_totes").hide();
                    break;
            }
        }
    });
});
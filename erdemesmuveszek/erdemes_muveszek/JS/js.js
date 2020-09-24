$(document).ready(function(){
    //Automatikus szűrés betöltés
    $("#adatok").ready(function(){
        $.post('lista.php',{nevek:1},function(adat){
            $("#adatok").html(adat);
        });
    });
    
    
});



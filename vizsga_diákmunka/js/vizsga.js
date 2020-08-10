$(document).ready(function(){
    //Belépés
        
    $(document).on("click","#belep",function(){
        var felhasznalo = $("#felhasznalo").val();
        var jelszo = $("#jelszo").val();
        if (felhasznalo.length > 1 && jelszo.length > 1) {
            $.ajax({
                url: 'php/login.php',
                method: 'post',
                data: {felhasznalo:felhasznalo, jelszo:jelszo},
                dataType:'text',
                success: function(adat){
                    location.reload();
                }
            });
        }
    });
    //Belépés
    $(document).on("click","#munkaado-lista", function() {
        
        $.ajax({
            url: 'php/munkaadok.php',
            method: 'get',
            success: function (data, textStatus, jqXHR) {
                
            },
            error: function (jqXHR, textStatus, errorThrown) {
                
            }
        });
        
        
        
    });
    
    
    //Kilépés
    $(document).on("click","#kilep",function(){
        $.post("php/logout.php",{kilep:1},function(){
            location.reload();
        });
    });
    
     
});



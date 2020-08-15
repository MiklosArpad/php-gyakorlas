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
    
    $(document).on("click","#munkaado-lista", function() {
        $.ajax({
            url: 'php/munkaadok.php',
            method: 'get',
            success: function (tablazat) {
                $('#adatok').html(tablazat);
            },
            error: function (xhr) {
                alert(xhr.status);
            }
        });
    });
    
    $(document).on("click","#uj-munkaado", function (){
        $.ajax({
            url: 'html/urlap.html',
            method: 'get',
            success: function (urlap) {
                $('#adatok').html(urlap);
            },
            error: function (xhr) {
                alert(xhr.status);
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



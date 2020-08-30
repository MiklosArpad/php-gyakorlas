$(document).ready(function(){
    $(".beteg-adatok").on("click", function(){
        var azonosito = $(this).data("id");
        console.log(azonosito);
        $.ajax({
            url: "get_szallitok.php",
            type: "GET",
            data: {data: azonosito},
            success:function(data){
                $(".tablazat").html(data);
            },
            error: function(){
                console.log("Hiba:");
                
            }
        })
    })
    $(".beteg-adatok").on("click", function(){
        var azonosito = $(this).data("id");
        console.log(azonosito);
        $.ajax({
            url: "get_szallitok.php",
            type: "GET",
            data: {data: azonosito},
            success:function(data){
                $(".tablazat").html(data);
            },
            error: function(){
                console.log("Hiba:");
                
            }
        })
    })
})



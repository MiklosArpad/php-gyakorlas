

$(document).ready(function () {

    //kategóriák kiolvasása
    $.get("../php/kategoriak.php", function (valasz) {
        $("[name=kategoria]").html(valasz);
    });

    //leírás eseményei
    $("[name=leiras]").on({

        keyup : function () {
            let hossz = $(this).val().length;
            $("#szoveghossz").text(255 - hossz);
        },
        paste : function () {
            let hossz = $(this).val().length;
            $("#szoveghossz").text(255 - hossz);
        }
    });

}); //ready vége



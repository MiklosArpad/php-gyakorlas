$(document).ready(function () {
    let url = $(location).attr('href');

    // kosárba hozzáadás
    $(document).on('click', '.hozzaad', function () {
        let kajaId = $(this).data('kajaid');

        $.post('php/kosarba.php', {id: kajaId}, function () {
            alert("A termék sikeresen kosárhoz lett adva!");
        });
    });

    //étlap megjelenítése
    if ((url.indexOf('etlap') > 0)) {
        $.get("php/termekek.php", function (valasz) {
            $("#content").html(valasz);
        }); // étlap betöltés vége
    }

    //kosár betöltése
    if ((url.indexOf('kosar') > 0)) {
        $.get("php/kosarbol.php", function (valasz) {
            $("#content").html(valasz);
        }); // kosár betöltés vége
    }


    $(document).on("click", ".modosit", function () {
        let be = $("input");

        /*
         $.post("php/mennyiseg.php", , function () {
         alert("Sikresen a tányérra került");
         });
         */
    });
}); //ready vége



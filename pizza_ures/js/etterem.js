﻿$(document).ready(function () {
    let url = $(location).attr('href');

    // kosár ürítés
    $(document).on('click', '.kosar-urites', function () {
        $.get('php/kosar_urites.php', function () {
            //$('#kosar-tabla').fadeOut();
            location.reload();
        });
    });


    // tétel módosítása
    $(document).on('click', '.kaja-modositas', function () {
        let gomb = $(this);

        let darabszam = gomb.parent('td') // szülő
                .prev('td').prev('td') // két tesóval vissza
                .children('input[type=number]').val(); // annak a gyerekének a value-ja

        let modositandoKajaId = gomb.data('modositando');

        $.post('php/tetel_modosit.php', {id: modositandoKajaId, darab: darabszam}, function () {
        });
    });

    $(document).on('click', '.rendel', function () {
        alert('A rendelés sikeresen megtörtént!');
    });

    //tétel törlés kosárból
    $(document).on('click', '.kaja-torles', function () {
        //let gomb = $(this);
        let torlendoKajaId = $(this).data('torlendo');

        $.post('php/tetel_torles.php', {id: torlendoKajaId}, function () {
            //gomb.parent('td').parent('tr').fadeOut();
            location.reload(); // REFAKTOR: adott oszlopot jQuery-vel eltüntetjük !!!
        });

    });

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

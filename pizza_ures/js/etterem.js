$(document).ready(function () {
    let url = $(location).attr('href');
    //étlap megjelenítése
    if ((url.indexOf('etlap') > 0)) {
        $.get("php/termekek.php", function (valasz) {
            $("#content").html(valasz);
        }); // étlap betöltés vége
    }
//kosár ürítés
    $(document).on('click', '.urites', function () {
        $.ajax({
            method: 'get',
            url: 'php/kosar_urites.php',
            success: function () {
                location.reload();
            },
            error: function (xhr) {
                alert(xhr.status);
            }
        });
    });
    //kiválasztott elem törlése
    $(document).on('click', '.torol', function () {
        let gomb = $(this);
        let kajaid = gomb.data('kajaid');

        $.ajax({
            method: 'post',
            url: 'php/kosarbol_torol.php',
            data: {
                kajaid: kajaid
            },
            success: function () {
                location.reload();
            },
            error: function (xhr) {
                alert(xhr.status);
            }
        });
    });
    //kosár betöltése
    if ((url.indexOf('kosar') > 0)) {
        $.get("php/kosarbol.php", function (valasz) {
            $("#content").html(valasz);
        }); // kosár betöltés vége
    }
//kosárba rakás
    $(document).on('click', '.hozzaadas', function () {
        let gomb = $(this);
        let kiszedettKajaId = gomb.data('kajaid');
        // alert(kiszedettKajaId);
        //alert(id);
        //let id = gomb.parent().parent().children().first();

        $.ajax({
            url: 'php/kosarba.php',
            method: 'post',
            data: {
                id: kiszedettKajaId
            },
            success: function () {
                alert("sikeresen a kosárba került");
            },
            error: function () {
                alert('nem sikerült belerakni');
            }
        });
    });
    $(document).on("click", ".modosit", function () {
        let be = $("input");
        /*
         $.post("php/mennyiseg.php", , function () {
         alert("Sikresen a tányérra került");
         });
         */
    });
}); //ready vége



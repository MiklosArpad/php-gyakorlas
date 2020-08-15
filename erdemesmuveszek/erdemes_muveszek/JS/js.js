$(document).ready(function () {

    //Automatikus szűrés betöltés
    $("#szures").ready(function () {
        $.ajax({
            method: 'get',
            url: 'select.php',
            success: function (htmlSelect) {
                $('#szures').html(htmlSelect);
            },
            error: function (xhr) {
                alert(xhr.status);
            }
        })
    });

    //Szűrés
    $(document).on('change', 'select', function () {
        let ev = $('select').val();
        
        $.ajax({
            method: 'post',
            url: 'lista.php',
            data: {
                'evszam':ev
            },
            success: function (tablazat) {
                $('#adatok').html(tablazat);
            },
            error: function (xhr) {
                alert(xhr.status);
            }
        })
    });

    //Kilépés
    $(document).on('click', '.kilep', function () {
        $.ajax({
            url: 'logout.php',
            method: 'get',
            success: function () {
                location.href = '../index.php';
            },
            error: function (xhr) {
                alert(xhr.status);
            }
        });
    });


    /* $.post('lista.php', {nevek: 1}, function (adat) {
     $("#adatok").html(adat);
     });*/

});

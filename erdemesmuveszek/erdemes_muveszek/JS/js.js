$(document).ready(function () {


    // 1. megoldás: eseményre töltődjön le a select lista
    // ajax hívás

    // 2. megoldás: a main-t kitakarítjuk a gyökérbe... (vizsgán nem hiszem hogy ilyet szabad.... minden összeomlik)

    let url = window.location.href; // natív JS
    //  let url = $('location').attr('href'); // jQuery

    console.log("Jelenleg ezen az URL-en vagyunk:" + url);

    if (url.indexOf('main.php') > 0) {
        $.ajax({
            method: 'get',
            url: 'select.php',
            success: function (selectHtml) {
                $('#szures').html(selectHtml);
            },
            error: function (xhr) {
                alert(xhr.status);
            }
        });
    }

    //Szűrés
    // Akkor vállald be, ha tudod hogy egy darab <select> van a DOM-fában!!!
    // Ha t9öbb select lenne az nem elég pontos, és összeakad hogy melyik select-re
    //legyen az esemény aggatva ?!
    $(document).on('change', 'select', function () {
        //alert('Belefut');
        let ev = $(this).val();
        //alert(ev);

        $.ajax({
            method: 'post',
            url: 'lista.php',
            data: {
                ev: ev
            },
            success: function (tablazat) {
                $('#adatok').html(tablazat);
            },
            error: function (xhr) {
                alert(xhr.status);
            }
        });
    });
    //Kilépés
    $(document).on('click', '.kilep', function () {
        //console.log('HELLO');
        $.ajax({
            method: 'get',
            url: 'logout.php',
            success: function () {
                location.href = '../index.php';
            },
            error: function (xhr) {
                alert(xhr.status);
            }
        });
    });
    //Belépés
    $(document).on('click', '#submit', function (event) {
        event.preventDefault();
        //alert('Belefut');
        let username= $('[name=felhasznalo]').val();
        let jelszo= $('[name=jelszo]').val();
        $.ajax({
           method: 'post',
           url:'login.php',
           data:{
               felhasznalo: username,
               jelszo: jelszo
           },
            success: function () {
                location.href='main.php';
            },
            error: function () {
                alert('Nem sikerült a bejelentkezés');
            }
        });
        // ha gondolod házi feladat
    });

});

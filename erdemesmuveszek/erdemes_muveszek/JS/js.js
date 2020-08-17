$(document).ready(function () {

    //Automatikus szűrés betöltés
    $("#szures").ready(function () {
        $.ajax({
            method: 'get',
            url: 'php/select.php',
            success: function (htmlSelect) {
                $('#szures').html(htmlSelect);
            },
            error: function (xhr) {
                alert(xhr.status);
            }
        })
    });

    //Login
    $(document).on('click', '#submit', function (submitGomb) {
        submitGomb.preventDefault(); // megállítottam a szerver felé futást,
        // még itt pár sor JS-nek le kell fusson...

        let username = $('[name=felhasznalo]').val();
        let jelszo = $('[name=jelszo]').val();

        $.ajax({
            method: 'post',
            url: 'php/login.php',
            data: {
                felhasznalo: username,
                jelszo: jelszo
            },
            success: function () {
                location.href = 'main.php';
            },
            error: function () {
                alert("Nem sikerült a bejelentkezés");
            }
        })
    });

    //Szűrés
    $(document).on('change', 'select', function () {
        let ev = $('select').val();

        $.ajax({
            method: 'post',
            url: 'php/lista.php',
            data: {
                'evszam': ev
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
            url: 'php/logout.php',
            method: 'get',
            success: function () {
                location.href = 'index.php';
            },
            error: function (xhr) {
                alert(xhr.status);
            }
        });
    });
});

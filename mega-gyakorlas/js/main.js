$(document).ready(function () {

    $(document).on('click', '.reg', function (e) {
        // 0) ha tudom, hogy ajaxolni fogok, azonnal letiltom a submit gomb 
        // működését!
        e.preventDefault();

        // 1) kiszedni a változókba 
        // a DOM-fából miket kell majd az ajax kérésben elküldenem a szerverre
        // perpill name HTML attribútum szerinti target...
        let nickname = $('[name=nickname]').val();
        let email = $('[name=e-mail-cim]').val();
        let jelszo = $('[name=pwd]').val();

        // 3) AJAX kérés megfogalmazása
        $.ajax({
            method: 'post',
            url: 'php/reg.php',
            data: {
                nickname: nickname, // arpi, bence, stb...
                email: email, // a@a, m@arpad.hu
                jelszo: jelszo // 12345, password!123
            },
            success: function () {
                location.href = 'index.php'; // kliensoldali átirányítás ...
            },
            error: function (xhr) {
                alert('Valami hiba történt, hibakód: ' + xhr.status);
                // hiba esetén kiprinteljük a hibaüzenetet és a hibakódot
            }
        })
    });
});

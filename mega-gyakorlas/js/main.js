$(document).ready(function () {

    $(document).on('click', '#login', function (e) {

        e.preventDefault();

        let nickname = $('[name=nickname]').val();
        let pwd = $('[name=password]').val();

        nickname = nickname.trim();
        pwd = pwd.trim();

        $.ajax({
            url: 'php/login.php',
            method: 'post',
            data: {
                nickname: nickname,
                pwd: pwd
            },
            success: function () {
                location.href = 'main.php';

                /*
                 $('#login-form').html("Login sikeres... Átirányítás...").css('color', 'white');
                 // Késleltetés
                 setInterval(function () {
                 location.href = 'main.php';
                 }, 2000);*/
            },
            error: function (xhr) {
                alert(xhr.status);
            }
        });
    });

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

        //console.log(nickname);
        //console.log(email);
        //console.log(jelszo);

        // karakterek elejéről, végéről üres szóközök eltávolítása...
        nickname = nickname.trim();
        email = email.trim();
        jelszo = jelszo.trim();

        //console.log(nickname);
        //console.log(email);
        //console.log(jelszo);

        let emailRegex = new RegExp(/^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/i);
        // let emailRegex = /^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/i;

        // Kliensoldali validáció kezdete ...
        if (nickname.length <= 10 && jelszo.length <= 8 && emailRegex.test(email)) {

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
                    alert('Sikeres regisztráció!'); // üzenet ...
                    location.href = 'index.php'; // kliensoldali átirányítás ...
                },
                error: function (xhr) {
                    alert('Valami hiba történt, hibakód: ' + xhr.status);
                    // hiba esetén kiprinteljük a hibaüzenetet és a hibakódot
                }
            });
        } else {
            // TODO: HTML hibaüzenetek készítése + email hibaüzi ...
            alert("Nickname 10 vagy annál kevesebb karakter lehet! Jelszó 8 vagy annál kevesebb karakter lehet!");
        }
    });

    $.ajax({
        method: 'get',
        url: 'php/users.php',
        success: function (response) {
            $('.users').html(response);
        },
        error: function () {
            $('.users')
                    .html('<h1 class="text-center">Nem sikerült letölteni a táblázatot!</h1>')
                    .css('color', 'red');
        }
    });

    $(document).on('click', '.js-torles', function () {
        // így már nem az aktuális gombot szedi ki, hanem a legeslegelsőt (oka: több gombnak van js-torles class-a)
        //let id = $('.js-torles').parent().parent().data('userid');

        // megoldás: $(this) -> ez a this mutat az eseményfigyelőben meghatározott gombra,
        // akin lefut az esemény

        let gomb = $(this);
        let td = gomb.parent();
        let tr = td.parent();

        let torlendoUserId = tr.data('userid');
        //console.log(id); TESZTELNI KELL TÉNYLEG KISZEDTE-E A JÓ ID-T...

        $.ajax({
            url: 'php/usertorles.php',
            method: 'post',
            data: {
                id: torlendoUserId
                        // ha az egyes törlés gombra kattintottam, akkor ez ilyen -> id : 1
                        // egyébként -> id : 2
            },
            success: function () {
                //location.reload();
                tr.fadeOut();
            },
            error: function (xhr) {
                alert('Valami hiba történt, hibakód: ' + xhr.status);
            }
        });

    });

    $(document).on('click', '.js-modositas', function () {
        //alert('Helló');
        let gomb = $(this);
        let td = gomb.parent();
        let tr = td.parent();

        let modositandoUserId = tr.data('userid');

        let td_0 = tr.children().first();
        let td_1 = td_0.next();

        let modositottNickname = td_0.text();
        let modositottEmail = td_1.text();

        $.ajax({
            url: 'php/usermodositas.php',
            method: 'post',
            data: {
                id: modositandoUserId,
                nickname: modositottNickname,
                email: modositottEmail
            },
            success: function () {
                alert("Sikeres módosult!");
            },
            error: function (xhr) {
                alert('Valami hiba történt, hibakód: ' + xhr.status);
            }
        });
    });
});

$(document).ready(function () {

    // kijelentkezés
    $('[name=logout]').click(function () {
        $.ajax({
            url: "php/logout.php",
            method: "post",
            success: function () {
                location.href = "index.php";
            },
            error: function (xhr) {
                alert(xhr.status);
            }
        });
    });

// esemény definiálás a gombkattintásra
    $('#auto_megjelenit').click(function () {

        // aszinkron kérje a szervertől a választ
        // és begyógyítja a divbe a html webpage-n

        $.ajax({
            method: "post",
            url: "php/autotablazat.php",
            success: function (answer) { // succes esetén a function paraméterébe a szerver válasza kerül bele
                $('#autotablazat').html(answer); // a szerver által kigenerált HTML-t a div-be belegyúgyítjuk a jQuery .html() füöggvénye segítségével
            },
            error: function (xhr) { // error esetén a function paraméterébe a szerver válasza kerül bele
                alert(xhr.status);
            }
        });

        $.ajax({
            method: "post",
            url: "php/select_marka.php",
            success: function (answer) {
                $('#szures_marka').html(answer); // a szerver által kigenerált HTML-t a div-be belegyúgyítjuk a jQuery .html() füöggvénye segítségével
            },
            error: function (xhr) {
                alert(xhr.status);
            }
        });
    });

    $('#login').click(function (kismacska) {
        kismacska.preventDefault();

        // name HTML attr. alapján kiszedjük az adatot.
        let username = $('[name=username]').val(); // form elem szöveges tartalmát
        // let username2 = $('#username').val(); // form elem szöveges tartalmát
        let password = $('[name=password]').val();

        console.log(username);
        console.log(password);

        $.ajax({
            method: "post",
            url: "php/login.php",
            data: {
                // JSON-formátumban kell adatot küldeni (kulcs-érték)
                "username": username,
                "password": password
            },
            success: function () {
                location.href = "autohirdetesek.php";
            },
            error: function () {

            }
        });

    });

    // márka szűrés
    $(document).on('change', '#automarkak', function () {
        // alert('Belefut az eseménybe!');

        let marka = $('#automarkak').val(); // amit kijelölünk .change() esemény során

        if (marka === '') {
            alert('Üres mező!!!');
            location.reload();
            // ha a hacker vmelyik optionnek kitörli a tartalmát, akkor újratöltődik a weblap
            //(ott újraértelmeződik a DOM-fa és az option visszaáll alapba)
        }

        $.ajax({
            url: "php/marka_szures.php",
            method: 'post',
            data: {
                // kulcs -> érték
                kismacska: marka
            },
            success: function (valasz) {
                $('#autotablazat').html(valasz);
            },
            error: function (xhr) {
                alert(xhr.status); // 400, 500, 501 (HTTP hibakód)
            }
        });

    });

    // regButton a funcitokn paraméterlistájában az nem más, mint a: $('[name=regButton]')
    $('[name=regButton]').click(function (regButton) {
        regButton.preventDefault(); // submit alapértelemezett működésének letiltása: AJAX-olást engedni fogja

        // mit csináljunk click-esemény hatására ???

        // kiszedni az értékeket az inputokból a DOM-fából
        let username = $('[name=username]').val();
        let password = $('[name=password]').val();

        if (username.length > 10) {
            alert("A felhasználónév nem lehet 10-nél hosszabb!");
        }

        if (password.length > 10) {
            alert("A jelszó nem lehet 10-nél hosszabb!");
        }

        if (username.length < 10 && password.length < 10) {
            $.ajax({
                url: "php/registration.php",
                method: "post",
                data: {
                    "username": username,
                    "password": password
                },
                success: function () {
                    // kliens-oldali átirányítás 
                    window.location = 'index.php';
                    //alert("Sikeres sikes regisztráció!");
                },
                error: function (xhr) {
                    alert(xhr.status + "Nem sikerült a regisztráció");
                }
            });
        }
    });
});

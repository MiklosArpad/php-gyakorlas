<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // gyengyén típusos script nyelv
        // változó: típus + azonosító
        // prog.nyelv: int a;
        // $: nem típus, hanem minden egyes VÁLTOZÓ azonosítója $ jellel kell kötelezően
        // kezdődjön, mert ebből jön rá az interpreter, hogy ez egy változó akar lenni
        // PHP nem eredendően OOP nyelv, tehát perpill ahhoz, hogy bármi lefusson,
        // nem kell class, nem kell main metódus

        $alma = "1"; // string "", vagy ''
        $eper = 1; // int
        // Console.WriteLine("");
        // C#, Java: string concat operátor
        // PHP-ban a '+' opetáror: csakis aritmetikai ÖSSZEADÁS operátor
        // Stirng összefűző operátor: '.'
        // PHP OOP-ban: mi a metódushívó (member access operátor) operátor? ->

        echo '<h1>Szia</h1>'; // kiíratás

        $sum = 1 + 2;
        echo $sum . '<br>';

        var_dump($sum);
        echo '<br>';

        $concat = "alma" . "fa";
        echo $concat;
        echo '<br>';
        var_dump($concat);
        echo '<br>';
        // VAR_DUMP() -> DEBUG

        $nevek = ["Bence", "Áron", "Árpád"];

        //echo $tomb;
        // var_dump($tomb);
        // FOR-CIKLUS
        for ($i = 0; $i < count($nevek); $i++) {
            echo $nevek[$i] . '<br>';
        }

        // FOREACH
        // C#: foreach (string nev[item] in nevek[collection])
        // foreach (var item in collection)
        // foreach (collection as item(
        foreach ($nevek as $nev) {
            echo $nev . '<br>';
        }




        session_start();

        // globális tömb -> kulcs-érték páros adatszerkezet
        // kulcs: 'user'
        // értéke: 'Árpád'
        $_SESSION['user'] = 'Árpád';


        $_SESSION['user1'] = 'Áron';


        // $_SESSION -> munkamenet követés
        // $_COOKIE -> sütik menedzselése
        // $_SERVER -> szerverről információk nyújtása
        // $_FILES -> fájlkezelés műveletek
        // 
        // 
        // $_POST, $_GET -> kliens-szerver kommunikáció (adatkérés, adatküldés)
        // post, get -> küldés, kérés
        // post: nem az URL-ben küld adatot
        // get: az URL-ben küldi az adatokat


        var_dump($_SESSION['user']);
        ?>
    </body>
</html>

$(document).ready(function () {
    let url = $(location).attr('href');

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



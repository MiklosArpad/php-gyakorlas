$(document).ready(function () {

// name HTML attribútum alapján kijelöltünk egy DOM-fa elemet

// ha változik a combobox értéke -> kiválasztunk valamit belőle
    $('[name=continent]').change(function () {
        // Az esemény hatására mi történik?
        // let: szigorúan lokális scope, változó
        // $(this) -> $('[name=continent]')

        let url = "index.php?continent=" + $(this).val(); // Afrika->1
        location.replace(url); // URL csere
    });

    /*
     $('.valami').change(function (){
     let valami = $(this); // akire meghívódott az esemény
     
     });
     */

    // CSS property-vel szedtük ki a dolgokat a DOM-fából
    //
    // <div class="valami">
    //$('.valami')

    // <div id="valami">
    //$('#valami')

    /*
     
     $('td').hover(function () {
     console.log("ESEMÉNYBE BELEMENTEN");
     // algoritmus, hogy mit akarok csinálni a hover esemény esetén a tr-ekkel
     $('tr').css('font-weight', 'bold');
     });
     
     
     $('td').mouseleave(function () {
     
     
     
     $('tr').css('font-weight', 'normal');
     });
     */

});




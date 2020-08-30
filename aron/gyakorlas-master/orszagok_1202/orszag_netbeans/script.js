$(document).ready(function(){
    $("[name=continent]").change(function(){
        let v = $(this).val(); //select value értékének kiolvasása
        let loc = "index.php?continent=" + v; //url előállítása
        location.replace(loc); //átírányít
    });

})
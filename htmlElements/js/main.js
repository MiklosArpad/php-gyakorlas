$(document).ready(function () {

    $.ajax({
        method: 'get',
        url: 'php/evszamok.php',
        success: function (selectHTML) {
            $('.evszamok').html(selectHTML);
        },
        error: function (xhr) {
            alert('Erőforrás nem elérhető' + xhr.status);
        }
    });
    $.ajax({
        method: 'get',
        url: 'php/szineszek.php',
        success: function (selectHTML) {
            $('.szineszek').html(selectHTML);
        },
        error: function (xhr) {
            alert('Erőforrás nem elérhető' + xhr.status);
        }
    });
    //SZűrés
    $(document).on('change', '.evszamok', function () {
        let ev = $(this).val();
        //console.log(ev);
        $.ajax({});   // szures.php -> táblázat ginerelás + paraméterezettel kérdezd le!
    });
});

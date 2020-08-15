$(document).ready(function () {

    //Automatikus szűrés betöltés
    $("#adatok").ready(function () {
        $.post('lista.php', {nevek: 1}, function (adat) {
            $("#adatok").html(adat);
        });
    });

    //Kilépés
    $(document).on('click', '.kilep', function () {
        $.ajax({
            url: 'logout.php',
            method: 'get',
            success: function () {
                location.href = '../index.php';
            },
            error: function (xhr) {
                alert(xhr.status);
            }
        });
    });
});

$(document).ready(function () {

    // ajax hívás
    $.ajax({
        method: 'get',
        url: 'select.php',
        success: function (selectHtml) {
            $('#szures').html(selectHtml);
        },
        error: function (xhr) {
            alert(xhr.status);
        }
    });

    //Szűrés
    // Akkor vállald be, ha tudod hogy egy darab <select> van a DOM-fában!!!
    // Ha t9öbb select lenne az nem elég pontos, és összeakad hogy melyik select-re
    //legyen az esemény aggatva ?!
    $(document).on('change', 'select', function () {
        //alert('Belefut');
        let ev = $(this).val();
        //alert(ev);

        $.ajax({
            method: 'post',
            url: 'lista.php',
            data: {
                ev: ev
            },
            success: function () {

            },
            error: function (xhr) {
                alert(xhr.status);
            }
        });
    });
});

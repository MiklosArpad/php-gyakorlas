$(document).ready(function () {

    $.ajax({
        method: 'get',
        url: 'php/cars.php',
        success: function (selectHTML) {
            $('.kocsik').html(selectHTML);
        },
        error: function (xhr) {
            alert('Erőforrás nem elérhető' + xhr.status);
        }
    });
});

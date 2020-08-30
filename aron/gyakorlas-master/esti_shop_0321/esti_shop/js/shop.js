$(document).ready(function () {

    //kosárhoz ad
    $('.addcart').click(function () {
	let id = $(this).data('id');
	//console.log(id);
	$.ajax({
	    url: 'php/addtocart.php',
	    method: 'POST',
	    data: {id: id},
	    success: function () {
		alert("Kosárhoz adva.");
	    },
	    error: function () {
		alert("Nem sikerült a kosárhoz adni!");
	    }
	});
    });//VÉGE kosárhoz ad

    //termék törlése a kosárból
    $(".delete-product").click(function () {
	let id = $(this).data('id');
	//console.log("katt",id);
	$.ajax({
	    url: 'php/deleteproduct.php',
	    method: 'POST',
	    data: {delete: id},
	    success: function () {
		//oldal frissítése
		location.reload();
	    },
	    error: function () {
		alert("Hiba a termék törlésekor!");
	    }
	});

    });//termék törlése


    //mennyiség módosítása
    $('.modify').click(function () {
	let dataId = $(this).data('id');
	let value = $('#' + dataId).text();
	//console.log(value);
	if (isNaN(value)) {
	    alert('Ide csak számot írhat!');
	} else {
	    value = Math.ceil(value); // egész számra kerekítés (felfelé)
	    $.ajax({
		url: 'php/valuemodification.php',
		method: 'POST',
		data: {id: dataId, value: value},
		success: function () {
		    //frissítjük az adatokat
		    location.reload();
		},
		error: function () {
		    alert("A módosítása nem sikerült");
		}
	    });
	}
    });


    //kosár ürítése


});//ready



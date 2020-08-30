$(document).ready(function(){
    console.log("betöltve");
    $.ajax({
	url : "php/get_allasok.php",
	method : "GET",
	success : function(allasok){
	    $('#allasok').html(allasok);
	},
	error : function(){
	    alert('Hiba a betöltéskor!');
	}
    });
   
    //kategóriára szűrés
    $(".keres").click(function(){
	let katId = $("#kategoriak").val();
	//$.get(URL,data,function(data,status,xhr),dataType)
	//URL get_allasok.php?kat=2
	//Fetch API 1.6 javascript
	let url = 'php/get_allasok.php?kat='+katId;
	$.get(url,function(allasok){
	    $('#allasok').html(allasok);
	});
    });
    
    //állás törlése
    $(document).on("click",".torles",function(){
	let id = $(this).data('id');
	$.ajax({
	    url : "php/delete.php",
	    method : "POST",
	    data : {id : id},
	    success : function(){
		location.reload();
	    },
	    error : function(){
		alert("HIBA!");
	    }
	});
	console.log(id);
    });
    
});



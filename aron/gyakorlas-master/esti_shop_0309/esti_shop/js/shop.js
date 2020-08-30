$(document).ready(function(){
    
    //kosárhoz ad
    $('.addcart').click(function(){
        let id = $(this).data('id');
        //console.log(id);
        $.ajax({
            url : 'php/addtocart.php',
            method : 'POST',
            data: {id : id},
            success: function(){
                alert("Kosárhoz adva.");
            },
            error: function(){
                alert("Nem sikerült a kosárhoz adni!");
            }
        });
    });//VÉGE kosárhoz ad
    
    //kosár ürítése
    
    
});//ready



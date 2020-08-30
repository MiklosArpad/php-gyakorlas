$(document).read(function(){    
    $("[name=transport]").change(function(){
        let v = $(this).val();
        let loc = "index.php?transport=" + v;
        location.replace(loc);
        
    });
    
})



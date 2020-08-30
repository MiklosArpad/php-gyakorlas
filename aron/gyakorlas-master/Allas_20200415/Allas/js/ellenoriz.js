$(document).ready(function(){
   $("[name=hely]").blur(function(){
       console.log("enter");
       let kat = Number($("[name=kategoria]").val());
       let mado = $("[name=munkaado]").val();
       let mkor = $("[name=munkakor]").val();
       let leiras = $("[name=leiras]").val();
       let fizetes = Number($("[name=fizetes]").val());
       
       let hely = $("[name=hely]").val();
       
       if (kat > 0 && mado.length > 0 && mkor.length > 0 && leiras.length >0 && fizetes > 0 && hely.length > 0){
	   console.log("kitöltve");
	   $(".kuld").prop('disabled', false);
       } else {
	   console.log("üres");
       }
   })
  
  
});



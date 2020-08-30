let specialis = "?!.%+-=";
let pwd;
$(document).ready(function(){
    //name=password/confirm
    //check password
    $("[name=password]").focusout(function(){
	let pwdError = "";	
	pwd = $(this).val();
	pwd = pwd.trim();
	if (pwd.length < 8){
	    pwdError += "Túl rövid!";
	}
	pwdError += vanESpecialis() ? "" : "Nem tartalmaz speciális karaktert!";	
	$('#pwdError').text(pwdError);
    }); // password
    
    //check cofirm
    $("[name=confirm]").focusout(function(){
	$("#pwdcError").text('');
	let pwdc = $("[name=confirm]").val();
	if (pwd != pwdc){
	    $("#pwdcError").text('A két jelszó nem egyezik!');
	}
    })
}); //READY



function vanESpecialis(){
    let betu;
    for (let i=0; i < pwd.length; i++){
	betu = pwd.charAt(i)
	if (specialis.includes(betu)) {
	    return true;
	}
    }
    return false;
}
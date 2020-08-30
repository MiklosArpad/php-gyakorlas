$(document).ready(function () {
    $(document).on('click', '.reszletek', function () {
        let az = $(this).data('azonosito');
        // let az = $(this).attr('data-azonosito');
        //console.log(az);
        window.location = 'details.php?kep=' + az;
    });
    //Űrlap alapértelmezett működésének letíltása
    $('[name=reg-form]').submit(function(event){
        event.preventDefault();
        console.log('Reg submit');
        let email = $('[name=email').val();
        let pwd = $('[name=password').val();
        let pwdc = $('[name=password_confirm').val();
        //let patt = new RegExp("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/");
        let patt = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");
        pwd = pwd.trim();
        email = email.trim();
        pwdc = pwdc.trim();
        console.log(pwd);
        if (patt.test(pwd) && pwd === pwdc){
            //jelszó kritériumainak ellenőrzése
            $.ajax({
                url : 'reg.php',
                method : 'POST',
                data : {email:email, pwd:pwd, pwdc:pwdc},
                success : function(){
                    window.location.replace("galeria.php");
                },
                error : function(){
                    
                }
            });
            
            /*$.post('reg.php',{email:email, pwd:pwd, pwdc:pwdc},function(adat){
                console.log(adat);
            });
            */
        } else{
            alert('Jelszó nem megfelelő!');
        }
        
    });
    
//Leírás karakterek számainak megjelenítése
    $(document).on('keyup paste', 'textarea', function () {
        const maxLength = 10;
        let str = this.value;
        let hossz = str.length;
        if (maxLength - hossz < 0) {
            str = str.slice(0, str.length - 1);
            this.value = str;
            hossz = str.length;
        }
        $('#countdown').text(maxLength - hossz);
    });
    // Leírás VÉGE

// Kép címének módosítása
    $('.cim').blur(function () {
        let str = $(this).text();
        let id = $(this).data('id');
        $.post('modifydetails.php', {id: id, cim: str}, function (adat, status) {
            console.log('A cím módosításra került!')
            $('.cim').text(adat);
            $('#myModal').css({'display': 'block', 'opacity' : '1'});
            //console.log($(this));
        }).fail(function () {
            console.log('Hiba!');
        })
    }); // kép címének módosítása VÉGE
    
    //Leírás módosítása
    $('.leiras').blur(function(){
        let id = $('.cim').data('id');
        let str = $(this).text();
        //console.log(id, str);
        $.ajax({
            url: 'modifydetails.php',
            method: 'POST',
            data: {id : id, desc : str}, //amit a zsernek elküldök
            dataType: 'text',//amit kapok a szervertől (text, html, json)
            success: function(adat){
                //response code = 200
                $('.leiras').text(adat);
                $('#myModal').css({'display': 'block', 'opacity' : '1'});
               
                console.log("A kép leírása módosításra került.");
            }, 
            error: function(){
                console.log("A kép leírása NEM módosult!");
            }
        });
    }); //Leírás módosításának VÉGE
    
    //Modalis ablak bezárása
    $('.modal-close').click(function(){
        $('#myModal').css({'display':'none', 'opacity':'0'});
    }); //Modális ablak bezár VÉGE
});


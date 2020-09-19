<!DOCTYPE html>
<html lang="hu">
    <head>
        <?php require_once 'html/head.html'; ?>
    </head>
    <body>
        <?php require_once 'html/navbar_out.html'; ?>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-group" id="reg-form">
                        <fieldset>
                            <legend class="text-center">Regisztráció</legend>
                            <form action="php/reg.php" method="post">
                                <div class="form-group">
                                    <input class="form-control" placeholder="nickname" type="text" name="nickname" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="e-mail cím" type="email" name="e-mail-cim" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="jelszó" type="password" name="pwd" required>
                                </div>
                                <div class="form-group">
                                    <input class="reg form-control btn btn-primary" type="submit" value="Regisztráció">
                                </div>
                            </form>
                        </fieldset>
                    </div> 
                </div>
            </div>
    </body>
</html>

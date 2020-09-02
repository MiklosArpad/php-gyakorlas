<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <title>Regisztráció</title>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="form-group" id="reg-form">
            <form action="reg.php" method="post">
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
                    <input class="form-control btn btn-primary" type="submit" value="Regisztráció">
                </div>
            </form>
        </div>
    </body>
</html>

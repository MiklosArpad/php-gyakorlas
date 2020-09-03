<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <title>Regisztráció</title>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/main.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="form-group" id="reg-form">
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
        </div>
    </body>
</html>

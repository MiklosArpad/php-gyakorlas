<?php

session_start();
$regError = "";
require_once('config/connect.php');
$sql = "INSERT INTO user (email, password, name, address , active) VALUES (?, ?, ?, ?, 1);";
$stmt = $connect->prepare($sql);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm']) && !empty($_POST['name']) && !empty($_POST['address'])) {
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $pwdc = $_POST['confirm'];
        $user = $_POST['name'];
        $address = $_POST['address'];
        $regError .= ($pwd != $pwdc) ? "A két jelszó nem egyezik meg!" : "";
        $regError .= (strlen($pwd) < 7) ? "Túl rövid a jelszó!" : "";
        if ($regError == "") {
            $pwd = password_hash($pwd, PASSWORD_DEFAULT);
            $stmt->bind_param("ssss", $email, $pwd, $user, $address);
            $stmt->execute();
        }
    }
}
$stmt->close();
$connect->close();


echo file_get_contents('html/header.html');
require_once 'set_nav.php';

if (isset($_SESSION['user'])){
    header('Location: index.php');
}

echo file_get_contents('html/reg_form.html');
echo file_get_contents('html/footer.html');
?>
<body style="background-image: url('imges/PEZ0428edited.jpg');
             background-repeat: no-repeat;
             background-attachment: fixed;
             background-size: 100% 100%;">
    
    
</body>

<?php 
//cek login
if(isset($_POST["submit"])) :
$username = $_POST["username"];
$password = $_POST["password"];
//cek password dan username
    if (!($username == "admin") || !($password == "1234")) :
        header("location: login.php?pesan=1"); 
        exit;
    endif;
else :
    header("location: login.php?pesan=2"); 
    exit;
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang Admin</h1>
    <a href="login.php">Logout</a>
</body>
</html>
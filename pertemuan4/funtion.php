<?php
 function pesan($waktu = "Datang", $nama = "admin"){
    return "$waktu, $nama";
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1> Selamat <?= pesan("Pagi"); ?></h1>
</body>
</html>
<?php 
 if(!isset($_GET["nama"])|| !isset($_GET["dMarket"])){
    //resire3ct
    header("location:latihan3.php"); 
    exit;
 }
$nama = $_POST["nama"];
$nim = $_POST["nim"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang <?= $nama; ?></h1>
    <p>NIM Saya <?= $nim; ?></p>
</body>
</html>
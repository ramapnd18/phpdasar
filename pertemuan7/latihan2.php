<?php 
//cek apakah tidak adda data di $_get
 if(!isset($_GET["nama"])|| !isset($_GET["dMarket"])){
    //resire3ct
    header("location:latihan1.php"); 
    exit;
 }
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            max-width: 100px;
        }
    </style>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["dMarket"]; ?>" alt=""></li>
        <li><?= $_GET["nama"]; ?></li>

    </ul>
    <a href="latihan1.php">kembali</a>
</body>
</html>
<?php
// // Variable scope
// $x = 10;

// function tampilX(){
//     global $x;
//     echo $x;
// };

// tampilX();
// echo "<br>";
// echo $x;

//varible superglobal
// MERUPAKAN ARARY ASSOCIATIVE
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_SERVER
// $_COOKIE
// $_ENV

// var_dump($_COOKIE);

// $_GET["nama"] = "Rama Tri Ramdhani";
// $_GET["npm"] = "247006111057";
// var_dump($_GET);

$chara = [
    [
        "nama" => "furina",
        "region" => "Fontaine",
        "vision" => "Hydro",
        "dMarket" => "furina.jpg"
    ],
    [
        "nama" => "Hutao",
        "region" => "Liyue",
        "vision" => "Pyro",
        "dMarket" => "hutao.jpg"
    ],
    [
        "nama" => "Xianyun",
        "region" => "Liyue",
        "vision" => "Anemo",
        "dMarket" => "xianyun.jpg"
    ],
    [
        "nama" => "Xiao",
        "region" => "Liyue",
        "vision" => "Anemo",
        "dMarket" => "xiao.jpg"
    ]
];

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
    <h1>Daftar Character</h1>
    <ul>
    <?php foreach( $chara as $value ): ?>
        <li><a href="latihan2.php?nama=<?= $value["nama"]; ?>&dMarket=<?= $value["dMarket"]; ?>"><?php echo "$value[nama] <br>"?></a></li>
        <?php endforeach; ?>
    </ul>    
</body>
</html>

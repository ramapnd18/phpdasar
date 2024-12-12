<?php
// Array of student data
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

$i = 1;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container m-5 p-5 rounded-5 bg-success">

        <table border="1" class="table table-responsive caption-top table-dark table-striped table-hover">
            <caption class="text-light">Chara Genshin</caption>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Region</th>
                <th>Vision</th>
                <th>Drip Marketing</th>
            </tr>
            <?php foreach ($chara as $mhs) :?>
            <tr>
                <td><?= $i?></td>
                <td><?= $mhs["nama"];?></td>
                <td><?= $mhs["region"];?></td>
                <td><?= $mhs["vision"];?></td>
                <td><img src="img/<?= $mhs["dMarket"]; ?>" alt="" style="width: 100px;"></td>        
            </tr>
            <?php $i++; endforeach;?>
        </table>
    </div>
</body>
</html>
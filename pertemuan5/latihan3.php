<?php
// Array of student data
$mahasiswa = [
    [
        "nama" => "Andi",
        "nim" => "123456",
        "jurusan" => "Teknik Informatika",
        "poto" => "xiangling.jpg"
    ],
    [
        "nama" => "Budi",
        "nim" => "654321",
        "jurusan" => "Sistem Informasi",
        "poto" => "xiangling.jpg"
    ],
    [
        "nama" => "Citra",
        "nim" => "112233",
        "jurusan" => "Teknik Elektro",
        "poto" => "xiangling.jpg"
    ],
    [
        "nama" => "Dewi",
        "nim" => "445566",
        "jurusan" => "Teknik Sipil",
        "poto" => "xiangling.jpg"
    ]
];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach ($mahasiswa as $mhs) :?>
    <ul>
        
        <li>Nama    :<?= $mhs["nama"]; ?></li>  
        <li>Jurusan :<?= $mhs["nim"];?></li>  
        <li>NPM     :<?= $mhs["jurusan"];?></li>  
        <li><img src="img/<?= $mhs['poto']; ?>" alt=""></li>  
            
    </ul>
    <?php endforeach;?>
</body>
</html>
<?php 
$koneksi = mysqli_connect("localhost","root","","phpdasar");

$result = mysqli_query($koneksi, "SELECT* FROM chara");

//cara mengambil data dari tabel 
//mysqli_free_result($result); // mengemblikam array numerik
//mysqli_fetch_result($result); // mengemblikan array assosiatif
//mysqli_fetch_assoc($result); 
//mysqli_fetch_array($result); 
//mysqli_fetch_object($result); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap">
    <title>Document</title>
</head>
<body>
    <h1>Data mahasiwa</h1>    
    <table border="1" cellpadding="10" cellspasing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $no = 1; while ($row = mysqli_fetch_assoc($result)) :?>
        <tr>
            <td><?= $no ; $no++;?></td>
            <td>
                <button type="edit" name="edit"><a href="">Edit</a></button>
                <button>Hapus</button>
            </td>
            <td><img src="img/<?= $row["poto"]; ?>" alt="" width="50"></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["npm"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php endwhile;?>
    </table>
</body>
</html>
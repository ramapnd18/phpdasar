<?php 

require 'functions.php';

$result = query('SELECT*FROM chara');

if(isset($_POST["cari"])){
    $result = cari($_POST["keyword"]);
}
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <main class="container border  mt-5" style="width: 1000px">

        <h1>Data mahasiwa</h1>    
        <a href="tambah.php" class="btn btn-success mb-3">Tambah Data Mahasiswa</a>
        <form action="" method="post">
            <input type="text" name="keyword" size="40" autofocus placeholder="Masukan keyword pencarian..." autocomplete="off">
            <button name="cari">Cari</button>
        </form>
        <table class="table table-responsive caption-top table-dark table-striped table-hover" "border="1" cellpadding="10" cellspasing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $no = 1; foreach($result as $row) :?>
        <tr>
            <td><?= $no ; $no++;?></td>
            <td>
                <a href="update.php?id=<?= $row["id"]; ?>"><button class="btn btn-primary" type="edit" name="edit">Edit</button></a>
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><button class="btn btn-danger" type="edit" name="edit">Hapus</button></a>
            </td>
            <td><img src="img/<?= $row["poto"]; ?>" alt="" width="50"></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["npm"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php endforeach;?>
    </table>
</main>
</body>
</html>
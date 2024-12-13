<?php 

require 'functions.php';

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
}

$username = $_SESSION["username"];


//pagination 
$dataPerhalaman = 2;
//hitung jumlah data
$jumlahData = count(query("SELECT * FROM chara"));
//hitung jumlah halaman
$jumlahHalaman = ceil($jumlahData / $dataPerhalaman);
//ambil halaman aktif
$halamanAktif = (isset($_GET["halaman"]))? $_GET["halaman"] : 1;
//ambil halaman awal
$dataAwal = ($dataPerhalaman * $halamanAktif) - $dataPerhalaman;

// pagination($jumlahData, $dataPerhalaman, $halamanAktif);
$jumlahLink = 2;
if ($halamanAktif > $jumlahLink) {
    $mulaiNomor = $halamanAktif - $jumlahLink;
}else{
    $mulaiNomor = 1;
}

if($halamanAktif <($jumlahHalaman - $jumlahLink)){
    $akhirNomor = $halamanAktif + $jumlahLink;
}else{
    $akhirNomor = $jumlahHalaman;
}

$result = query("SELECT * FROM chara limit $dataAwal, $dataPerhalaman");

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav class="nav ">
        <ul>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <main class="container border  mt-5" style="width: 1000px">

        <h1>Data mahasiwa</h1>    
        <a href="tambah.php" class="btn btn-success mb-3">Tambah Data Mahasiswa</a>
        <div class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <form action="" method="post" class="d-flex mb-2">
                    <input class="form-control me-2" type="text" name="keyword" size="30" autofocus placeholder="Masukan keyword pencarian..." autocomplete="off">
                    <button class="btn btn-outline-success" name="cari">Cari</button>
                </form>
            </div>
            <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php if($halamanAktif != 1) : ?>
                        <li class="page-item"><a class="page-link " href="?halaman=<?=1?>">Awal</a></li>
                        <li class="page-item"><a class="page-link " href="?halaman=<?= $halamanAktif - 1?>">&lt;</a></li>
                        <?php else : ?>
                        <li class="page-item"><a class="page-link disabled " href="">&lt;</a></li>
                        <?php endif; ?>

                        <?php for($i = $mulaiNomor; $i<=$akhirNomor; $i++): ?>
 
                            <?php if($i == $halamanAktif) : ?>
                                <li class="page-item">
                                    <a class="page-link bg-primary text-white" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                                </li>
                            <?php else : ?>

                        <li class="page-item">
                            <a class="page-link " href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                        </li>
                            <?php endif; ?>
                        <?php endfor; ?>
                        <?php if($halamanAktif == $jumlahHalaman): ?>
                        <li class="page-item disabled"><a class="page-link " href="">&gt;</a></li>
                            <?php else : ?>
                                <li class="page-item"><a class="page-link " href="?halaman=<?= $halamanAktif + 1?>">&gt;</a></li>
                                <li class="page-item"><a class="page-link " href="?halaman=<?= $jumlahHalaman?>">Akhir</a></li>
                            <?php endif; ?>
                    </ul>
            </nav>

        </div>
        <div class="table-responsive">

            <table class="table caption-top table-dark table-striped table-hover" "border="1" cellpadding="10" cellspasing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
            <?php $no = 1 + $dataAwal; foreach($result as $row) :?>
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
        </div>
</main>
</body>
</html>
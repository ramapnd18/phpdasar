<?php 
require 'functions.php';

// cek apakah tambah ditekan atau belum 
if(isset($_POST["submit"])) {
    
    // cek apakah data berhasil ditambahkan
    if(tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan');
                document.location.href = 'index.php';
            </script>";
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <main class="container mt-5 bg-light shadow p-5">
        
        <h1>Tambah Data Mahasiswa</h1>
        <form method="post" action="" enctype="multipart/form-data" class="col-auto">
            <div class="mb-3 ">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" class="form-control" name="npm" id="npm" required>
            </div>
        <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" name="jurusan" id="jurusan" required>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="gambar" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Tambah Data </button>
    </form>
    <a href="index.php" class="btn btn-danger mt-1">Kembali</a>
</main>
</body>
</html>
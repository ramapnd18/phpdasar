<?php 
require 'functions.php';

if(isset($_POST["submit"])) {

    if(registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
                document.location.href = 'registrasi.php';
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

    <title>Document</title>
</head>
<body>
    <main class="container mt-5 bg-light shadow p-5" style="width: 500px">
        <h1>Halaman Registrasi</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">Username : </label>
                    <input class="form-control" type="text" name="username" id="username"> 
                </li>
                <li>
                    <label for="password">Password : </label>
                    <input class="form-control" type="password" name="password" id="password">
                </li>
                <li>
                    <label for="password2">Konfirmasi Password : </label>
                    <input  class="form-control" type="password" name="password2" id="password2">
                </li>
                <li>
                    <button class=" btn btn-primary" type="submit" name="submit">Registrasi</button>
                </li>
            </ul>
        </form>
    </main>
</body>
</html>
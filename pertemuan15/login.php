<?php 
require 'functions.php';
session_start();
 if(isset($_POST['submit'])) {
     $username = $_POST['username'];
     $password = $_POST['password'];
    
     $result = mysqli_query($koneksi, "select * from user where username = '$username'" );

     //cek username
    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        //cek password
        if(password_verify($password, $row["password"])){
            $_SESSION["username"] = $row["username"];
           
            header("Location: index.php");
            exit;
        }else{

            echo "Password Salah";
        }
        
    }else{

        echo "Password Salah";
    }
    //  header("location: login.php?pesan=1");
    //  exit;
 }
?>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    
    <main class="container border mt-5 bg-light p-5" style="width: 500px">
        <?php if(isset($_GET["pesan"])) : ?>
            <?php if($_GET["pesan"] == 1) : ?>
                <p style="color: red; font-style: italic;">Username dan Password Salah</p>
            <?php elseif($_GET["pesan"] == 2) : ?>
                <p style="color: red; font-style: italic;">Anda belum login</p>
            <?php endif; ?>
        <?php endif; ?>
    <h1>Halaman Login</h1>
    <ul>
        <form action="" method="post">
        <li>
            <label for="username">Username:</label>
            <input class="form-control" type="text" id="username" name="username" required>
        </li>
        <li>
            <label for="password">Password:</label>
            <input class="form-control" type="password" id="password" name="password" required>
            <button class="btn btn-primary mt-1" name="submit" type="submit">Login</button>
        </li>
        </form>
       <p>Belum punya akun? <a href="registrasi.php">Registrasi</a></p>
    </ul>
    </main>
</body>
</html>
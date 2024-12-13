<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_GET["pesan"])) : ?>
        <?php if($_GET["pesan"] == 1) : ?>
            <p style="color: red;">Username dan Password Salah</p>
        <?php elseif($_GET["pesan"] == 2) : ?>
            <p style="color: red;">Anda belum login</p>
        <?php endif; ?>
    <?php endif; ?>
    <h1>Halaman Login</h1>
    <ul>
        <form action="halaman_admin.php" method="post">
        <li>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </li>
        <li>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button name="submit" type="submit">Login</button>
        </li>
        </form>
    </ul>
</body>
</html>
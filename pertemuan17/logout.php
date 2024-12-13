<?php 
//memulai session
session_start();

//hapus sessiom
session_unset();
$_SESSION = [];
session_destroy();

//hapus cookie
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

header("Location: login.php");
exit;
?>
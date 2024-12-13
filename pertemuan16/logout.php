<?php 
//memulai session
session_start();

//hapus sessiom
session_unset();
$_SESSION = [];
session_destroy();

header("Location: login.php");
exit;
?>
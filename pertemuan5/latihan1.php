<?php
//array
//variable yang dapat menampung banyak nilai
//element array bisa beda beda
//membuat array

$hari = array('senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [111, "Februari", true];
// //mengakses isi array

// // var_dump() / print_r($bulan);
// var_dump($hari); 
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// foreach ($hari as $key => $value) {
//     echo "Index: $key, Hari: $value <br>";  //mencetak index dan isi array
// }
// echo "<br>";

// echo $hari[0];

$bulan[]= "April";
$bulan[]= "Mei";

var_dump($bulan);
?>
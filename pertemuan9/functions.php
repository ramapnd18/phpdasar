<?php 
//kone4ksi database
    $koneksi = mysqli_connect("localhost","root","","phpdasar");

    //cek koneksi
    if(mysqli_connect_errno()){
        echo "Koneksi Gagal : ".mysqli_connect_error();
    }
 //ambil data mahasiswa

 function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, "SELECT* FROM chara");
    $rows = [];
    while($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
 }
?>
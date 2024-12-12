<?php 
//kone4ksi database
    $koneksi = mysqli_connect("localhost","root","","phpdasar");

    //cek koneksi
    if(mysqli_connect_errno()){
        echo "Koneksi Gagal : ".mysqli_connect_error();
    }
 //ambil data mahasiswa

 //tampilkan data mahasiswa
 function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, query: $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
 }

 //tambah data mahasiswa
 function tambah($data){
    global $koneksi;
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $query = "INSERT INTO chara VALUES ('', '$nama', '$npm', '$email', '$jurusan', '$gambar')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
 }

 function hapus($data){
    global $koneksi;
    $id = $data;
    $query = "DELETE FROM chara WHERE id = $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
 }


?>
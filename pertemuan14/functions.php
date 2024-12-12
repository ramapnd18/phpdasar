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
    $result = mysqli_query($koneksi, $query);
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

    //upload gambar
    $gambar = upload();
    if(!$gambar){
        return false;
    }

    $query = "INSERT INTO chara VALUES ('', '$nama', '$npm', '$email', '$jurusan', '$gambar')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
 }

 function upload(){
   
   $namaFile = $_FILES['gambar']['name'];
   $ukuranFile = $_FILES['gambar']['size'];
   $error = $_FILES['gambar']['error'];
   $tmpName = $_FILES['gambar']['tmp_name'];

   //cek apakah tidak ada gambar yang diupload
   if($error === 4){
       echo "<script>
                alert('Pilih gambar terlebih dahulu!');
            </script>";
       return false;
   }

   //cek apakah yang diupload adalah gambar
   $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
   $ekstensiGambar = explode('.', $namaFile);
   $ekstensiGambar = end($ekstensiGambar);
   if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
       echo "<script>
                alert('Yang anda upload bukan gambar!');
            </script>";
       return false;
   }

   //cek jika ukurannya terlalu besar
   if($ukuranFile > 1000000){
      echo "<script>
            alert('Gambar yang diupload terlalu besar!');
            </script>";
         return false;
   }

   //lolos pengecekan
   if(move_uploaded_file($tmpName, 'img/'.$namaFile)){
       return $namaFile;
   }else{
       echo "<script>
                alert('Gambar gagal diupload!');
            </script>";
       return false;
   }
}

 function hapus($data){
    global $koneksi;
    $id = $data;
    $query = "DELETE FROM chara WHERE id = $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
 }
 function ubah($data){
   global $koneksi;
   $id = $data["id"];
   $npm = htmlspecialchars($data["npm"]);
   $nama = htmlspecialchars($data["nama"]);
   $email = htmlspecialchars($data["email"]);
   $jurusan = htmlspecialchars($data["jurusan"]);
   $gambar = htmlspecialchars($data["gambar"]);
   $query = "UPDATE chara SET
               npm = '$npm',
               nama = '$nama',
               email = '$email',
               jurusan = '$jurusan',
               poto = '$gambar'
               WHERE id = $id";
   mysqli_query($koneksi, $query);
   return mysqli_affected_rows($koneksi);
}

function cari($keyword){
   global $koneksi; 
    
   $query = "SELECT * FROM chara
            WHERE nama LIKE '%$keyword%' OR 
            npm LIKE '%$keyword%' OR 
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'";
    return query($query);
}
?>
<?php
// // Array of student data
// $mahasiswa = [
//     [
//         "nama" => "Andi",
//         "nim" => "123456",
//         "jurusan" => "Teknik Informatika"
//     ],
//     [
//         "nama" => "Budi",
//         "nim" => "654321",
//         "jurusan" => "Sistem Informasi"
//     ],
//     [
//         "nama" => "Citra",
//         "nim" => "112233",
//         "jurusan" => "Teknik Elektro"
//     ],
//     [
//         "nama" => "Dewi",
//         "nim" => "445566",
//         "jurusan" => "Teknik Sipil"
//     ]
// ];

// // Display student data
// foreach ($mahasiswa as $mhs) {
//     echo "Nama: " . $mhs["nama"] . "<br>";
//     echo "NIM: " . $mhs["nim"] . "<br>";
//     echo "Jurusan: " . $mhs["jurusan"] . "<br><br>";
// }

$mahasiswa = [["Rama Tri Ramdhani", "Informatika", "247006111057", "247006111057@student.unsil.ac.id"],
["Rama Tri Ramdhani", "Informatika", "247006111057", "247006111057@student.unsil.ac.id"],
["Rama Tri Ramdhani", "Informatika", "247006111057", "247006111057@student.unsil.ac.id"]
        ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 3</title>
</head>
<body>
    <?php foreach ($mahasiswa as $mhs) :?>
    <ul>
        
        <li>Nama    :<?php echo "$mhs[0] <br>"?></li>  
        <li>Jurusan :<?php echo "$mhs[1] <br>"?></li>  
        <li>NPM     :<?php echo "$mhs[2] <br>"?></li>  
        <li>email   :<?php echo "$mhs[3] <br>"?></li>  
            
    </ul>
    <?php endforeach;?>
</body>
</html>
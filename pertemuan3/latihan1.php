<?php
// perulangan
//for
// for($i = 0; $i < 5; $i++){
//     echo $i;
// }
// while
$i =0;
// while ($i <5){
//     echo $i."<br>";
//     $i++;
// }
// do{
//     echo $i."<br>";
//     $i++;
// }while($i<5)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris{
             background-color: greenyellow;
 
        }
    </style>
</head>
<body>
    <table border=1>
        <?php for($i =1; $i < 5; $i++){?>
            <?php if( $i % 2 == 1) :?>
                <tr class="warna-baris">
            <?php else:?>
                <tr>
            <?php endif; ?>
                <?php for($j = 1; $j < 5; $j++){?>
                    <td> <?= "$i,  $j";?></td>
                <?php }?>
            </tr>
        <?php }?>
    </table>
</body>
</html>
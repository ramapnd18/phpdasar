<?php
//perulangan pada array
//for / foreach

$angka = [5,16,1,67,2,7,4,21];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2</title>
    <style>
        .kotak {
            width: 100px;
            height: 100px;
            background-color: salmon;
            text-align: center;
            line-height: 100px;
            display: inline-block;
            margin: 10px;
            float: left;
            transition: 1s;

        }
        .clear{
            clear:both;
        }
        .kotak:hover{
            
            background-color: lightblue;
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <!-- //foreach -->
    <?php foreach($angka as $value) :?>
    <div class="kotak"><?php echo $value?></div>
    <?php endforeach;?>
    <div class="clear"></div>
    <!-- //for -->
    <?php for($i = 0; $i < count($angka); $i++) :?>
    <div class="kotak"><?php echo $angka[$i]?></div>
    <?php endfor;?>
</body>
</html>
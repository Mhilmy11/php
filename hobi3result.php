<?php

$name=$_REQUEST["name"]; 
$hobi1=$_REQUEST["hobi"]; 
$hobi2=$_REQUEST["hobi2"];
$hobi3=$_REQUEST["hobi3"];

function total($harga){ 
    switch ($harga) {
        case 'basket':
            $harga=1000;
            break;
        case 'bola':
            $harga=10000;
            break;
        case 'voli':
            $harga=12000;
            break;
        case 'billiard':
            $harga=15000;
            break;
        case 'mancing':
            $harga=16000;
            break;
        case 'coding':
            $harga=20000;
            break;
        case 'diving':
            $harga=150000;
            break;
    }
    return $harga;

}

$total = total($hobi1) + total($hobi2) + total($hobi3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hobi3.css">
    <style>
        body{
            background-image: url("assets/03f6a6acc2e077b00f71d5a395547457.jpg");
        }
    </style>
</head>
<body>
    <div class="back">
        <div class="back-1">
            <div class="padding">
                <div>Name :</div>
                <h3><?php echo $_REQUEST["name"]?></h3>
            </div>
            <div class="padding">
                <h4>Hobi :</h4>
                <span><?php echo $_REQUEST["hobi"]?>,</span>
                <span><?php echo $_REQUEST["hobi2"]?>,</span>
                <span><?php echo $_REQUEST["hobi3"]?></span>
            </div>
            <div class="padding garis"></div>
            <div class="padding">
                <h4>Harga Total :</h4>
                <div>Rp : <?php echo $total?> </div>
            </div>
        </div>
    </div>
</body>
</html>
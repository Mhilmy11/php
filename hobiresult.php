<?php

$name=$_REQUEST["name"];
$hobi=$_REQUEST["hobi"];

if ($hobi=="Bola") {
    $voucher=10000;
}elseif ($hobi=="Voli") {
    $voucher=5000;
}elseif ($hobi=="Tennis") {
    $voucher=20000;
}elseif ($hobi=="Basket") {
    $voucher=25000;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hobi.css">
</head>
<body>
    <div class="back">
        <div class="iya in-hobi">
            <div class="padding">
                <div>Name :</div>
                <h3><?php echo $_REQUEST["name"]?></h3>
            </div>
            <div class="padding">
                <div>Hobi :</div>
                <h3><?php echo $_REQUEST["hobi"]?></h3>
            </div>
            <div class="padding">
                <div>Voucher :</div>
                <h3><?php echo $voucher?></h3>
            </div>
        </div>
    </div>
</body>
</html>
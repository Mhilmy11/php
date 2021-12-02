<?php

$name=$_REQUEST["name"];
$staff=$_REQUEST["staff"];
$status=$_REQUEST["status"];
$child=$_REQUEST["child"];

$income_amount=$_REQUEST["income"];

if ($status=="yes") {
    $income_amount += 1320000;
}

if ($child >=0) {
    if ($child >=3) {
        $child = 3;
    }

    $income_amount += $child * 1320000;
}


$tax = 0.0;

if($income_amount >= 500000000) {
    $tax = $income_amount * 0.30;
}elseif($income_amount >= 250000000) {
    $tax = $income_amount * 0.25;
}elseif($income_amount >= 50000000){
    $tax = $income_amount * 0.15;
}elseif($income_amount <= 50000000){
    $tax = $income_amount * 0.5;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tax.css">
    <style>
        body{
            background-image: url("assets/03f6a6acc2e077b00f71d5a395547457.jpg");
        }
    </style>
</head>
<body>
    <div>
        <div class="container all">
            <div class="back-in">
                <div class="tax-in">
                    <div>Employee Name :</div>
                    <div class="f-bold"><?php echo $_REQUEST["name"]?></div>
                </div>
                <div class="tax-in">
                    <div>Staff ID :</div>
                    <div class="f-bold"><?php echo $_REQUEST["staff"]?></div>
                </div> 
                <div class="tax-in">
                    <div>Tax To Be Paid :</div>
                    <div class="f-bold">Rp : <?php echo $tax?></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
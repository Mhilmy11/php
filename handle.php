<?php
// var_dump($_REQUEST["nama"]);

// $_REQUEST["nama"] = ["udin", "ara"];

// $hahaha =["udin", "ara"];

// $_REQUEST["nama"]["0"]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="array.css">
</head>
<body>
    <div>
        
        <!-- <?php for ($i=0; $i < count($_REQUEST["nama"]); $i++) {
             
            echo "<h1>" . $_REQUEST["nama"][$i]. "</h1>";

        }?> -->

        <?php for ($i=0; $i < count($_REQUEST["nama"]); $i++) { ?>
          <h1> <?php echo $_REQUEST["nama"][$i] ?></h1>
        <?php } ?>
        
    </div>
</body>
</html>
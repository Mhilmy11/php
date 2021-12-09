<?php
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = mysqli_connect($servername, "root", $password, "tes");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$datanama = $_REQUEST["nama"]; 



for ($i=0; $i < count($datanama) ; $i++) {

    $sql = "INSERT INTO name (nama) VALUES ('$datanama[$i]')"; // "INSERT INTO name (nama) VALUES ('rahul')"

    mysqli_query($conn, $sql); // kein
}


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
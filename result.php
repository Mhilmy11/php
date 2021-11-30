<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="input.css">
</head>
<body>
    <div class="sub-box">
        <div class="box">
            <div>
                <div>Name :</div>
                <div class="t-bold"><?php echo $_REQUEST['name']; ?></div>
            </div>
            <div class="in">
                <div>NIM :</div>
                <div class="t-bold"><?php echo $_REQUEST['nim']; ?></div>
            </div>
            <div class="in">
                <div>Alamat :</div>
                <div class="t-bold"><?php echo $_REQUEST['alamat']; ?></div>
            </div>
        </div>

    </div>
</body>
</html>
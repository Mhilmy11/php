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
        <form action="hobiresult.php">
            <div class="in-hobi">
                <h4>Nama :</h4>
                <input type="text" name="name">
            </div>
            <div class="in-hobi">
                <div>Hobi :</div>
                <select name="hobi">
                    <option value="Bola">Bola</option>
                    <option value="Voli">Voli</option>
                    <option value="Tennis">Tennis</option>
                    <option value="Basket">Basket</option>
                </select>
            </div>
            <div>
                <button class="btn-1">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
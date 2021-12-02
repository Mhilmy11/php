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
                <div class="back">
                    <h1>Pembayaran Pajak Tahunan</h1>
                </div>
                <form class="in-tax" action="taxresult.php" method="post">
                    <div class="tax-in">
                        <label>Employee Name :</label>
                        <input name="name" type="text">
                    </div>
                    <div class="tax-in">
                        <label>Staff ID :</label>
                        <input name="staff" type="text">
                    </div>
                    <div class="tax-in">
                        <label>Marital Status :</label>
                        <input name="status" type="text">
                    </div>
                    <div class="tax-in">
                        <label>Child Under 21 :</label>
                        <input name="child" type="text">
                    </div>
                    <div class="tax-in">
                        <label>Income Monthly :</label>
                        <input name="income" type="text">
                    </div>
                    <div class="btn-edit">
                        <button class="btn-done">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
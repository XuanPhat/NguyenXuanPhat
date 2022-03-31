<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $dientich = $_POST["Bankinh"] * 2 * 3.14;
    ?>
    <form action="" method="post">
        Dien tich: <input type="text" name="Dientich" value=<?php echo $dientich ?>><br>
        Ban kinh: <input type="text" name="Bankinh"><br>
        <input type="submit">
    </form>
</body>

</html>
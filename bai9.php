<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai9</title>
</head>
<body>
    <?php
   $doanvangoc = $_POST["doanvangoc"];
    $tugoc = $_POST["tugoc"];
    $tuthaythe = $_POST["tuthaythe"];
     $ketqua= str_replace($tugoc,$tuthaythe,$doanvangoc);
    ?>
    <h1>Thay thế chuỗi</h1>
    <form action="" method="post">
        <label>Đoạn văn gốc</label>
        <input type="text" name="doanvangoc" value="<?php echo $doanvangoc; ?>"/>
        <label>Tu goc</label>
        <input type="text" name="tugoc" value="<?php echo $tugoc; ?>"/>
        <label>Thay the bang</label>
        <input name="tuthaythe" type="text" value="<?php echo $tuthaythe;?>" />
        <div>
            <input name="ketqua" type="text" value="<?php echo $ketqua; ?>"/>
        </div>

        <input type="submit">
    </form>
</body>
</html>


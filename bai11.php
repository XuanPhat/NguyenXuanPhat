<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
    }
    </style>
</head>

<body>

    <?php
    $arHocVien = array(
        "FFSE1701001" => array("Nguyễn Văn Bảo", "95", "1"),
        "FFSE1701002" => array("Huỳnh Thị Thanh Thuỷ", "85", "0"),
        "FFSE1701003" => array("Ngô Việt Anh", "98", "1"),
        "FFSE1701004" => array("Nguyễn Thị Hương Lan", "100", "1")
    );

    // Hiển thị thông tin các học viên được cấp chứng nhận ( CapChungNhan = 1 ) theo dạng bảng các dòng liên tiếp có màu khác nhau
    $timkiemcapchungthan = array_search("Nguyễn Văn Bảo", $arHocVien);

    ?>

    <table width="100%">
        <tr>
            <th>ID_SV</th>
            <th>Ten_SV</th>
            <th>AVG</th>
            <th>Capchungthan</th>
        </tr>
        <?php
        foreach ($arHocVien as $key => $value) {
            // if ($value[2] == "1") {
            echo "
                <tr>
                <td>$key</td>
                <td>$value[0]</td>
                <td>$value[1]</td>
                <td>$value[2]</td>
                </tr>
                ";
            $max = 0;
            $maxTotal = 0;
            if ($max < $value[1]) {
                $max =  $value[1];
                $maxTotal =  $value;
            }
            if ($value[2] == 0) {
                unset($arHocVien[$key]);
                print_r($arHocVien);
            }
        }

        $arHocVien["FFSE1701005"] =  array("Nguyễn Xuan Thang", "46", "0");
        $arHocVien["FFSE1701006"] =  array("Nguyễn Xuan Vinh", "12", "1");
        ?>
    </table>

</body>

</html>
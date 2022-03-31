<?php 
$str = "12345";
$arrlength = str_split($str);
 $min = 0;
 for($i = 0 ;$i < count($arrlength);$i++)
 {
    if($min  == null)
    {
        $min = $arrlength[$i];
    }
    else
    {
        if($min > $arrlength[$i])
        {
            $min = $arrlength[$i];
        }
    }
 }
 echo "So nho nhat la $min";


 ?>
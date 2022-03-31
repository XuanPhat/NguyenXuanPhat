<?php
function Maxsum()
{
  $str = "1244,45788";
  $strReplace = explode(',', $str);
  $maxtotal= 0;
  $max = 0;
  foreach ($strReplace as  $value) {
    $total= 0;
     $splitNum= str_split($value,1);
     foreach ($splitNum as $x) {
      $Bienchan = (int)$x;
      if($Bienchan % 2 == 0)
      {
        $total+= $Bienchan;
      }
      if($maxtotal < $total)
      {
          $maxtotal = $total ;
          $max = $value;
      }
     }
  }
  echo $max;
}
Maxsum();
?>



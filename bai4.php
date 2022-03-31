<?php 
 $n = (int)readline("Nhap n= ");
 $sum = 0;
 $j = 3;
  for($i = 1;$i <= 3;$i++)
  { 
      $sum = $sum + ($i / $j);
      $j += 3;
  }
  echo $sum;
?>

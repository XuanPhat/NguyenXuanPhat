<?php 
$n = (int)readline("Nhap n ");
$count = 0;
 for ($i=0;$i < $n;$i++) { 
      if($i % 2 == 0)
      {
          $count++;
      }
 }
 echo $count;
?>
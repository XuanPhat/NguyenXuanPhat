<?php 
  $sole = readline("Nhap so nguyen n bat ki: ");
  $sum = 0;
  while($sole != 0)
  { 
$tachso = $sole % 10;
if($tachso % 2 != 0)
{
  $sum += $tachso;    
} 
 $sole = $sole / 10;
  }
  echo $sum;

?>
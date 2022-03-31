<?php 
  $sotienphaitra = 150;
  if($sotienphaitra > 200 && $sotienphaitra <= 300 )
  {
   echo $sotienphaitra =  $sotienphaitra * 0.2;
  }
  elseif($sotienphaitra > 300)
  {
      echo $sotienphaitra = $sotienphaitra * 0.3;
  }
  else
  {
      echo "Khong khuyen mai";
  }
?>
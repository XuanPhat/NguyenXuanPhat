<?php
$month = (int)readline('Nhap thang: ');
if ($month) {
  switch ($month) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
      echo "Co 31 ngay";
      break;
    case 2:
      echo "Co 28 hoac 29 ngay";
      break;
    case 4:
    case 5:
    case 6:
    case 9:
    case 11:
      echo "Co 30 ngay";
      break;
    default:
      echo "Thang chi toi da tu thang 1 den thang 12";
      break;
  }
} else {
  echo "so thang phai la kieu so so";
}

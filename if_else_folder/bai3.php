<?php
   $year = 2003;
   if ($year < 0) {
      echo 'Lỗi';
   } else {
    if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 > 0)) {
      echo 'Đây là năm nhuận';
    } else {
      echo 'Đây không phải năm nhuận';
    }
   }
   
 ?>
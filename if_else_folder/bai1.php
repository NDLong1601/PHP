<?php
   $a = 6;
   $b = 7;
   $c = 3;
   $a2 = $a*$a;
   $b2 = $b*$b;
   $c2 = $c*$c;
   // 5-4-3
   if ($a < 0 || $b < 0 || $c < 0) {
      echo "Lỗi";
  } else {
    if (($a+$b>$c) && ($b+$c>$a) && ($c+$b>$a)) {
      echo 'Đây là 3 cạnh của một tam giác';
      if (($a2==$b2+$c2)||($b2==$c2+$a2)||($c2==$b2+$a2)){
        echo 'Tam giác Vuông';
      } elseif ($a==$b && $b==$c) {
        echo '<br>Tam giác Đều';
      } elseif ($a==$b || $b==$c || $c==$a) {
        echo '<br>Tam giác Cân';
      } elseif (($a2>$b2+$c2)||($b2>$a2+$c2)||($c2>$b2+$a2)) {
        echo '<br>Tam giác Tù';
      } else {
        echo '<br>Tam giác Nhọn';
      }
    } else {
      echo 'Đây không phải là một tam giác';
    }
  }
 ?>
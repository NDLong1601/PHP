<?php
   //Tính tổng của 20 số đầu tiên trong dãy fibonacci
   $n = 20;
   $So1 = 0;
   $So2 = 1;
   $Tong = 0;
   for ($i = 0; $i < $n; $i++) {
       echo $So1 . " ";
       $Tong += $So1;
       $So3 = $So1 + $So2;
       $So1 = $So2;
       $So2 = $So3;
   }
   echo "<br>";
   echo "Tổng của 20 số đầu tiên trong dãy Fibonacci là: " . $Tong;
 ?>
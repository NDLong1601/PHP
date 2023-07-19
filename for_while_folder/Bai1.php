<?php

   for ($i = 0;$i < 10;$i ++) {
     echo "<br>";
     for ($j = 0;$j < 20;$j ++) {
       echo "*";
     }
     
   };
   echo "<br>";
   for ($x = 0;$x < 10;$x ++) {
     for ($y =(10-$x);$y < 10;$y ++) {
         echo "*";
     }
     echo "<br>";
     
   };
   echo "<br>";
  for ($i=0; $i < 6; $i++) { 
        for ($j=0; $j < 7; $j++) { 
            if ($i == 0 && $j % 3 != 0 || $i == 1 && $j % 3 == 0 || $i - $j == 2 || $i + $j == 8) {
                echo "*";
            }
            else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }

 ?>
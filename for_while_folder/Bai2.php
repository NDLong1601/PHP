<?php
    //So nguyen to

    $n = 15;
    $count = 0;
    $i = 2;
    while ($count < $n) {
        $isPrime = true;
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            echo $i . " ";
            $count++;
        }
        $i++;
    }
    
?>
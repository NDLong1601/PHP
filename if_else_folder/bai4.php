<?php
$a = 5;
$b = 6;
$c = -2;

echo "Phương trình: " . $a . "x2 + " . $b . "x + " . $c . " = 0";
echo "<br>";
if ($a == 0) {
    if ($b == 0) {
        echo ("Phương trình vô nghiệm!");
        } else {
            echo ("Phương trình có một nghiệm: " . "x = " . (- $c / $b));
        }
        return;
    }
$delta = $b * $b - 4 * $a * $c;
    if ($delta > 0) {
        $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
        $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
        echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
    } else if ($delta == 0) {
        $x1 = (- $b / (2 * $a));
        echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
    } else {
        echo ("Phương trình vô nghiệm!");
    }
?>
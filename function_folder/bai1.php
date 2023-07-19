<?php
    //Sắp xếp mảng theo thứ tự từ bé đến lớn
    $array = [];
    $length = 5;

    for ($i = 0; $i < $length; $i++) {
    $randomNumber = mt_rand(0, 50);
    $array[] = $randomNumber;
    };

    sort ($array);
    echo "Mảng theo thứ tự từ nhỏ đến lớn: ";
    foreach ($array as $n) {
        echo "$n"." ";
    }
?>
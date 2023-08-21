<?php
    //Viết chương trình tạo ra 1 ma trận 2 chiều hình vuông số nguyên bất kỳ và tính tổng 2 đường chéo của ma trận
    $size = 3; 
    $matrix = [];

    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            $matrix[$i][$j] = rand(1,10);
        }
    }

    echo "Ma trận:<br>";

    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            echo $matrix[$i][$j] . "\n";
        }
        echo "<br>";
    }


    $sumMain = 0;
    for ($i = 0; $i < $size; $i++) {
        $sumMain += $matrix[$i][$i];
    }


    $sumSub= 0;
    for ($i = 0; $i < $size; $i++) {
        $sumSub += $matrix[$i][$size - 1 - $i];
    }

    echo "Tổng đường chéo chính: " . $sumMain . "<br>";
    echo "Tổng đường chéo phụ: " . $sumSub . "<br>";
?>
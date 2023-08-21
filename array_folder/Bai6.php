<?php
    //Viết chương trình tạo 1 mảng số nguyên bất kỳ và in ra mảng đó sau khi sắp xếp các giá trị từ lớn đến nhỏ
    $n = rand(5,10); //số phần tử của mảng
    $array = [];
    for($j = 0; $j < $n ; $j++) {
        $array[$j] = rand(-500, 500);
        echo $array[$j] . " ";
    }
    echo "<br>";
    rsort ($array);
    echo "Mảng theo thứ tự từ lớn đến nhỏ: ";
    foreach ($array as $n) {
        echo "$n"." ";
    }
?>
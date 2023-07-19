<?php
    //Viết chương trình tạo 1 mảng số nguyên bất kỳ và in ra mảng đó sau khi sắp xếp các giá trị từ lớn đến nhỏ
    $array = [5,1,9,2,0,4];

    rsort ($array);
    echo "Mảng theo thứ tự từ lớn đến nhỏ: ";
    foreach ($array as $n) {
        echo "$n"." ";
    }
?>
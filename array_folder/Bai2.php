<?php
    //Viết chương trình tạo 1 mảng số nguyên bất kỳ và in ra mảng đó sau khi sắp xếp các giá trị từ nhỏ đến lớn
    $array = [5,1,9,2,0,4];

    sort ($array);
    echo "Mảng theo thứ tự từ nhỏ đến lớn: ";
    foreach ($array as $n) {
        echo "$n"." ";
    }

?>
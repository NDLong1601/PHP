<?php
//Viết chương trình tạo 1 mảng số nguyên bất kỳ và tìm in ra số lớn nhất và nhỏ nhất trong mảng
$i = rand(5,10);
$arr = [];
$max = 0;
$min = 100;
for($j = 0 ; $j < $i ; $j++) {
    $arr[$j] = rand(0,100);
    echo $arr[$j] . " ";
    if ( $max < $arr[$j] ) {
        $max = $arr[$j];
    }
    if ( $min > $arr[$j] ) {
        $min = $arr[$j];
    }
}
echo '<br>';
echo "Max = " . $max;
echo '<br>';
echo "Min = " . $min;
?>

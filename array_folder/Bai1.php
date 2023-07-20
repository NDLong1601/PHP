<?php
//Viết chương trình tạo 1 mảng số nguyên bất kỳ và tìm in ra số lớn nhất và nhỏ nhất trong mảng
$length = 10;
$min = 1;
$max = 100;

$numbers = array();

for ($i = 0; $i < $length; $i++) {
  $randomNumber = mt_rand($min, $max);
  $numbers[] = $randomNumber;
  echo "<br>";
}
print_r($numbers);

?>

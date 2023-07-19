<?php
    //Chuyển 1 mảng thành chuỗi và 1 chuỗi thành mảng
    $name_info = array(
        'firstname' => 'Nguyễn Đức',
        'lastname' => 'Long'
    );
    $fullname = implode(' ', $name_info);
    echo $fullname;
    $string = "Bùi Huyền Hảo";
    $explode_string = explode(' ',$string);
    echo "<pre>";
    print_r($explode_string);
    echo "</pre>";

?>
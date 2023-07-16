<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST["name"];
            $datetime = $_POST["datetime"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $gender = $_POST["gender"];
            $inf = $_POST["inf"];
    
            echo "Họ và tên: " . $name . "<br>";
            echo "Ngày sinh: " . $datetime . "<br>"; 
            echo "Số điện thoại: " . $phone . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Giới tính: ". $gender . "<br>";
            echo "Thông tin mô tả về bản thân: " . $inf;
        }
?>
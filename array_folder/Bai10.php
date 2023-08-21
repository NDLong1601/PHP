<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kiểm tra chuỗi Palindrome</title>
</head>
<body>
    <form method="post" action="Bai10.php">
        <label>Nhập vào 1 chuỗi ký tự
            <input type="text" name="string">
        </label>
        <button type="submit" name="Submit">Submit</button>
    </form>
</body>
</html>
<?php
    //Viết chương trình nhập vào 1 chuỗi là kiểm tra xem chuỗi đó có phải là 1 palindrome hay ko
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $string = $_POST['string'];
        $length = strlen($string);
        $mid = floor($length/2);
        for ($i = 0; $i < $mid; $i++) {
            if ($string[$i] != $string[$length - 1 - $i]) {
            echo "This is not a palindrome.";
            break;
            } else {
                echo "This is a palindrome.";
                break;
            }            
        }
    
    }
?>
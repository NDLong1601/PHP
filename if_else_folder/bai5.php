<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc số nhỏ hơn 1000</title>
</head>
<body>
    <form action="bai5.php" method="post">
        <b>Nhập số cần đọc: </b>
        <input type="number" name="number" id="">
        <button type="submit" name="submit">Đọc</button>
    </form>
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = $_POST['number'];


        echo $number;


    }
?>
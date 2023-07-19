<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuỗi đảo ngược</title>
    <style>
        button {
            background-color: blueviolet;
        }
    </style>
</head>
<body>
    <form action="Bai3.php" method="post">
        <b>Nhập Chuỗi:</b>
        <input type="text" name="array">
        <button type="submit" name="Submit">Submit</button>
    </form>
</body>
</html>

<?php
    // Viết chương trình nhập vào 1 chuỗi bất kỳ và in ra chuỗi đảo ngược của chuỗi đó
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $array=$_POST['array'];

        echo strrev($array);

    }
?>
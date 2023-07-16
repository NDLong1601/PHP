<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máy tính</title>
    <style>
        button {
            background-color: cornflowerblue;
            height: 50px;
        }
    </style>
</head>
<body>
    <form action="bai6.php" method='post'>
        <b>Số thứ nhất:</b>
        <input type="number" name="number1">
        <b>Số thứ hai:</b>
        <input type="number" name="number2">
        <b><br>Phép tính:</b>
        <input type="radio" name="radio" value="1">+
        <input type="radio" name="radio" value="2">-
        <input type="radio" name="radio" value="3">*
        <input type="radio" name="radio" value="4">/<br>
        <button type="submit" name="submit">Tính</button>
    </form>
</body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $radio = $_POST['radio'];

        switch ($radio) {
            case 1:
                echo $number1 + $number2;
                break;
            case 2:
                echo $number1 - $number2;
                break;
            case 3:
                echo $number1 * $number2;
                break;
            case 4:
                echo $number1 / $number2;
                break;
            default:
                echo "Không xác định !!!";
        }

    }
?>
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
        form {
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <form action="Bai6_8.php" method="post">
        <b>Nhập Chuỗi:</b>
        <input type="text" name="string">
        <button type="submit" name="Submit">Submit</button>
    </form>
</body>
</html>

<?php
    //Viết chương trình nhập vào 1 string bất kỳ và in ra chuỗi gồm ký tự và số lần xuất hiện của ký tự đó trong chuỗi

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $string=$_POST['string'];
        $characters = [];
        echo "Chuỗi là: ".$string."<br>";
        for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
    
            if (isset($characters[$char])) {
            $characters[$char]++;
            } else {
            $characters[$char] = 1;
            }
        }

        foreach ($characters as $char => $count) {
            echo "Kí tự '$char' xuất hiện $count lần.<br>";
        }
    }
?>
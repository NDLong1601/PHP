<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quay mảng</title>
</head>
<body>
    <form method="post" action="Bai9.php">
        <label>Nhập số lần quay:
            <input type="number" name="number">
        </label>
        <button type="submit" name="Submit">Submit</button>
    </form>
</body>
</html>


<?php 
    //Hàm hiển thị 
    function displayArray($array) {
        foreach ($array as $row) {
            foreach ($row as $value) {
                echo "[" . $value . "]";
         
            }
            echo "<br>";
        }
    }
    //Hàm quay 
    function rotateArray($array) {
        $rotatedArray = array();
        $size = count($array);
        for ($i = 0; $i < $size; $i++) {
            $rotatedRow = array();
            for ($j = 0; $j < $size; $j++) {
                $rotatedRow[] = $array[$size - $j - 1][$i];
            }
            $rotatedArray[] = $rotatedRow;
        }
        return $rotatedArray;
    } 
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $n = $_POST['number'];
        $array = array(
            array(2, 4, 3),
            array(5, 3, 7),
            array(5, 1, 2)
        );         
        echo "Mảng ban đầu:<br>";
        displayArray($array);    
        // Quay mảng
        for ($i = 1; $i <= $n; $i++) {
            $array = rotateArray($array);
        }  
        echo "Mảng sau khi quay:<br>";
        displayArray($array);  
    
    }
?>
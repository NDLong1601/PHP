<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Từ điển</title>
</head>
<body>
    <h1>Từ điển phương tiện đi lại</h1>
    <form action="bai11.php" method="post">
        Dictionary: <input type="text" name="word"><br>
        <button type="submit"> Submit</button>

    </form>
    
</body>
</html>

<?php
    if($_SERVER ["REQUEST_METHOD"] === "POST"){
    $word = $_POST["word"];
    $dictionary = array(
    "bike" => "xe đạp",
    "plane" => "máy bay",
    "boat" => "thuyền",
    "truck" => "xe tải",
    "motorbike" => "xe máy", 
    );
    if (isset($dictionary[$word])) {   
        echo "Nghĩa của từ '{$word}' là: " . $dictionary[$word];
    } else {   
        echo "Không tìm thấy nghĩa của từ '{$word}' trong từ điển.";
    }

}
?>

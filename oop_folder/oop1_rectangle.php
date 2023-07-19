<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-1</title>
</head>
<body>
    <form action="oop1_rectangle.php" method="post">
        Length: <input type="number" name="length"><br>
        Width: <input type="number" name="width"><br>
        <input type="submit" name="Submit" value="Calculate">
    </form>
</body>
</html>


<?php
    class Rectangle {
        public $length;
        public $width;
        function __construct($length,$width) {
            $this->length = $length;
            $this->width = $width;
        }
        function get_length(){
            return $this->length;
        }

        function get_width() {
            return $this->width;
        }

        function get_area() {
            return $this->length * $this->width;
        }

        function get_perimeter() {
            return 2 * ($this->length + $this->width);
        }
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $length = $_POST['length'];
        $width = $_POST['width'];
        $rectangle = new Rectangle($length,$width);

        echo "Length :".$length."<br>";
        echo "Width :".$width."<br>";
        echo "Area: " . $rectangle->get_area() . "<br>";
        echo "Perimeter: " . $rectangle->get_perimeter() . "<br>";

    }

?>
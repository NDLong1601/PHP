<?php
    include_once "shape.php";
    class Rectangle extends Shape {
        public $length;
        public $width;

        function __construct($length,$width,$name) {
            parent::__construct($name);
            $this->length = $length;
            $this->width = $width;
        }

        function calculateArea() {
            return $this->length * $this->width;
        }

        function calculatePerimeter() {
            return 2 * ($this->length + $this->width);
        }
    }
?>
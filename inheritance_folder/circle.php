<?php
    include_once "shape.php";
    
    class Circle extends Shape {
        public $radius;
        function __construct($radius,$name) {
            parent::__construct($name);
            $this->radius = $radius;
        }

        function calculateArea() {
            return 3.14 * ($this->radius ** 2);
        }
        function calculatePerimeter() {
            return 2 * 3.14 * $this->radius;
        }
    }
?>
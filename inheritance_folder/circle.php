<?php
    include_once "Shape.php";
    
    class Circle extends Shape {
        public $radius;
        function __construct($radius,$name) {
            parent::__construct($name);
            $this->radius = $radius;
        }

        function calculateArea() {
            return pi() * ($this->radius ** 2);
        }
        function calculatePerimeter() {
            return 2 * pi() * $this->radius;
        }
    }
?>
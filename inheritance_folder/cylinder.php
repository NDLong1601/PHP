<?php
    include_once "Circle.php";

    class Cylinder extends Circle {
        public $height;

        function __construct($height,$radius,$name) {
            parent::__construct($radius,$name);
            $this->height = $height;
        }
        
        function calculateArea() {
            return  parent::calculatePerimeter() * $this->height;
        }

        function calculateVolume() {
            return $this->height * parent::calculateArea();
        }

    }
?>
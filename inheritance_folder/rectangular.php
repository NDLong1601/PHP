<?php
    include_once "Rectangle.php";
    class Rectangular extends Rectangle {
        public $height;
        function __construct($height,$length,$width,$name) {
            parent::__construct($length,$width,$name);
            $this->height = $height;
        }

        function calculateArea() {
            return parent::calculatePerimeter() * $this->height;
        }

        function calculateVolume() {
            return parent::calculateArea() * $this->height;
        }
    }
?>
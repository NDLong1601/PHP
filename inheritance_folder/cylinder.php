<?php
    include_once "circle.php";

    class Cylinder extends Circle {
        public $height;

        function __construct($height,$radius,$name) {
            parent::__construct($radius,$name);
            $this->height = $height;
        }
        
        function calculateArea() {
            return 2 * 3.14 * $this->radius * $this->height;
        }

        function calculateVolume() {
            return $this->height * ($this->radius ** 2) * 3.14;
        }

    }
?>
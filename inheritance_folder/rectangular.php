<?php
    include_once "rectangle.php";
    class Rectangular extends Rectangle {
        public $height;
        function __construct($height,$length,$width,$name) {
            parent::__construct($length,$width,$name);
            $this->height = $height;
        }

        function calculateArea() {
            return ($this->length + $this->width) * 2 * $this->height;
        }

        function calculateVolume() {
            return $this->height * $this->length * $this->width;
        }
    }
?>
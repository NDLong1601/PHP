<?php
    class Shape {
        public $name;
        function __construct($name) {
            $this->name = $name;
        }
        
        function showname() {
            return "My name is".$this->name."<br>";
        }
    }
?>
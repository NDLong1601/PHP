<?php

    include_once "Circle.php";
    include_once "Cylinder.php";
    include_once "Rectangle.php";
    include_once "Rectangular.php";

    $circle = new Circle(4," Circle");
    echo $circle->showname();
    echo "Area: ".$circle->calculateArea()."<br>";
    echo "Perimeter: ".$circle->calculatePerimeter()."<br>";

    echo "<br>";

    $cylin = new Cylinder(3,4," Cylinder");
    echo $cylin->showname();
    echo "Area: ".$cylin->calculateArea()."<br>";
    echo "Volume: ".$cylin->calculateVolume()."<br>";

    echo "<br>";

    $rectle = new Rectangle(5,2," Rectangle");
    echo $rectle->showname();
    echo "Area: ".$rectle->calculateArea()."<br>";
    echo "Perimeter: ".$rectle->calculatePerimeter()."<br>";

    echo "<br>";

    $reclar = new Rectangular(4,5,3," Rectangular");
    echo $reclar->showname();
    echo "Area: ".$reclar->calculateArea()."<br>";
    echo "Volume: ".$reclar->calculateVolume()."<br>";


?>  
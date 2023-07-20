<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuadracticEquation</title>
</head>
<body>
    <form action="oop2_quadracticequation.php" method="post">
        Hệ số a: <input type="number" name="Hesoa">
        Hệ số b: <input type="number" name="Hesob">
        Hệ số c: <input type="number" name="Hesoc">
        <button type="submit">Tính</button>
    </form> 
</body>
</html>
<?php
    class QuadracticEquation {
         public $Hesoa;
         public $Hesob;
         public $Hesoc;

         public $delta;
         function __construct($Hesoa,$Hesob,$Hesoc,$delta) {
            $this->Hesoa = $Hesoa;
            $this->Hesob = $Hesob;
            $this->Hesoc = $Hesoc;
            $this->delta = $delta;          
         }
         function get_NoSolution() {
            echo "No solution !!!";
         }
         function get_DoubleRoot() {
            return - $this->Hesob / ( 2 * $this->Hesoa);
         }
         function get_Root1() {
            $x1 = (-$this->Hesob + sqrt($this->delta)) / 2 * $this->Hesoa;
            return $x1;
         }
         function get_Root2() {
            $x2 = (-$this->Hesob - sqrt($this->delta)) / 2 * $this->Hesoa;
            return $x2;
         }

    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Hesoa = $_POST['Hesoa'];
        $Hesob = $_POST['Hesob'];
        $Hesoc = $_POST['Hesoc'];
        $delta = $Hesob * $Hesob - 4 * $Hesoa * $Hesoc;

        $ptb2 = new QuadracticEquation($Hesoa,$Hesob,$Hesoc,$delta);

        if ($Hesoa == 0) {
            if ($Hesob == 0 && $Hesoc != 0 ) {
                echo $ptb2->get_NoSolution();
            } elseif ($Hesob == 0 && $Hesoc == 0) {
                echo "Phương trình vô số nghiệm";
            } elseif ($Hesob != 0 && $Hesoc != 0 ) {
                echo "X: ".-$Hesoc/$Hesob;
            }
        } else {
            echo "Delta: ".$delta."<br>";
            if ($delta < 0) {
                echo $ptb2->get_NoSolution()."<br>";
            } elseif ($delta = 0) {
                echo $ptb2->get_DoubleRoot()."<br>";
            } else {
                echo "Root1:".$ptb2->get_Root1()."<br>";
                echo "Root2:".$ptb2->get_Root2()."<br>";
            }
        }               
    }
?>
<?php

abstract class Car{

    abstract function applyBreak();
}

class SportsCar extends Car{

    function applyBreak()
    {
        echo "Applying breaks..." . PHP_EOL;
    }
}

$car1 = new SportsCar();
$car1->applyBreak(); //Abstract Method Implemented in Child Class

//$car1 = new Car(); //Cannot create instance of Abstract Class.


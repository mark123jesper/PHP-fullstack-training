<?php

abstract class Car{

    abstract function applyBreak();

    function hello(){
        echo "Print Hello" . PHP_EOL;
    }
}

class SportsCar extends Car{

    function applyBreak()
    {
        echo "Applying breaks..." . PHP_EOL;
    }
}

$car1 = new SportsCar();
$car1->hello(); //Abstract Parent Class Method
$car1->applyBreak(); //Abstract Method Implemented in Child Class

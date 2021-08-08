<?php



class Car
{
    public $name;
    public $color;

    function sayHello(){
        echo "Hello from Car Class" . PHP_EOL;
    }
}

//Every Object has its own properties
$car1 = new Car();
$car1->name = "Ferrari";
$car1->color = "Red";
$car2 = new Car();
$car2->name = "BMW";
$car2->color = "Green";
var_dump($car1);
var_dump($car2);


$car1->sayHello();
echo "$car1->name is $car1->color Color." . PHP_EOL;
$car2->sayHello();
echo "$car2->name is $car2->color Color." . PHP_EOL;
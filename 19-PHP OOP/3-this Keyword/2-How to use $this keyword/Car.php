<?php

Class Car {
    public $name = "";

    //Getter
    function getName() : string {
        return $this->name;
    }

    //Setter
    function setName($name){
        $this->name = $name;
    }

    function printName(){
        echo $this->showName() . PHP_EOL;
    }

    function showName(){
        return $this->name;
    }
}
$car1 = new Car();
//Example 1 - Getter and Setter Methods.
$car1->setName("John, Smith");
echo $car1->getName() . PHP_EOL;

//Example 2 - Change Properties from outside.
$car1->name = "Jane";
echo $car1->getName() . PHP_EOL;

//Example 3 - Independent Objects - $this inside the class refers to its object instance.
$car2 = new Car();
$car2->name = "June";
echo $car1->getName() . PHP_EOL;
echo $car2->getName() . PHP_EOL;

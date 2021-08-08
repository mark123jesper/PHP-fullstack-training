<?php

Class Car {
    public $name = "John, Smith";
    function printName(){
        echo $this->showName() . PHP_EOL;
    }
    function showName(){
        return $this->name;
    }
}
$c = new Car();
$c->printName();
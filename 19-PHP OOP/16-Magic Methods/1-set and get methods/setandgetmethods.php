<?php

class Student{

    private $id;

    function __set($name, $value){
        echo "Set method is not found so this is called." . PHP_EOL;
        echo $name . PHP_EOL;
        echo $value . PHP_EOL;
    }
    function __get($name){
        echo "Get method is not found so this is called." . PHP_EOL;
        echo $name . PHP_EOL;
    }
}

$student1 = new Student();
$student1->id = "Test" . PHP_EOL;
echo $student1->id . PHP_EOL;


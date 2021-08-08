<?php


class Student
{

    public $name;
    public $class;

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }

    function setClass($class){
        $this->class = $class;
    }

    function getClass(){
        return $this->class;
    }

    function printDetails(){
        echo "$this->name is studying in $this->class class." . PHP_EOL;
    }
}

$student1 = new Student();
$student2 = new Student();

$student1->name = "John, Smith";
$student1->class = "1st";

$student2->name = "Jane";
$student2->class = "5th";

$student1->printDetails();
$student2->printDetails();

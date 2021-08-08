<?php


class Student
{

    public $name;
    public $class;

    function __construct($name = "", $class = ""){
        $this->name = $name;
        $this->class = $class;
    }

    function printDetails(){
        echo "$this->name is studying in $this->class class." . PHP_EOL;
    }
}

$student1 = new Student();
$student1->name = "John, Smith";
$student1->class = "1st Class";
$student1->printDetails();

//Recommended Way
$student2 = new Student("John, Smith", "1st Class");
$student2->printDetails();

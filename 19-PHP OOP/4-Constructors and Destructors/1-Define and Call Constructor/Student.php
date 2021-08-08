<?php


class Student
{
    public $name = "John, Smith";
    public $class = "1st";

    function __construct(){
        echo "This is Constructor!" . PHP_EOL;
    }

    function printDetails(){
        echo "$this->name is studying in $this->class class." . PHP_EOL;
    }
}

$student1 = new Student();
$student1->printDetails();

$student2 = new Student();
$student2->printDetails();
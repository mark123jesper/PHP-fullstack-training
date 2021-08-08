<?php

trait DatabaseHelper{
    function getRecords(){
        echo "Here are the records";
    }
}

class Student{
    use DatabaseHelper;

    function connectDB(){
        $this->getRecords();
    }
}

$student1 = new Student();
$student1->connectDB();
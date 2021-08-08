<?php

trait DatabaseHelper{
    function getRecords(){
        echo "Here are the records";
    }
}

trait StringHelper{
    function removeSpaces($str) : string{
        return trim($str);
    }
}

class Student{
    use DatabaseHelper;
    use StringHelper;

    function connectDB(){
        $this->getRecords();
        echo $this->removeSpaces("  This is a test!   ");
    }
}

$student1 = new Student();
$student1->connectDB();
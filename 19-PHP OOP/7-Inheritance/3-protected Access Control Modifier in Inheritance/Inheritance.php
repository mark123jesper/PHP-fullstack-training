<?php

class University{

    protected $universityName = "Boston University";

    function helloUniversity(){
        echo "Hello from University Class" . PHP_EOL;
    }


}

class Teacher extends University{

    public $teacherName = "Jane";
    function helloTeacher(){
        echo "Hello from Teacher Class" . PHP_EOL;
    }

    function getUniversityName(){
        return $this->universityName;
    }
}

$teacher1 = new Teacher();
$teacher1->helloTeacher();
$teacher1->helloUniversity();

//When Access Modifier is public.
//$teacher1->teacherName = "Modified";
//$teacher1->universityName = "Modified";

echo $teacher1->teacherName . PHP_EOL;
//echo $teacher1->universityName . PHP_EOL; //Error Cannot Access from outside.
echo $teacher1->getUniversityName() . PHP_EOL;


<?php

declare(strict_types=1);
//Promote Good Practise
class University{

    private $name = "";

    /**
     * @return mixed
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName(string $name) : void
    {
        $this->name = $name;
    }
}

class Student extends University {

    private $studentID = "";
    private $studentName = "";

    function setDetails(array $studentName, University $university){
        $this->studentID = $studentName[0];
        $this->studentName = $studentName[1];
        $this->name =  $university->getName();
    }
}

$u = new University();
$u->setName('Boston University');
$s = new Student();
$student = [ '1', 'Jane' ];
$s->setDetails($student, $u);
var_dump($s);
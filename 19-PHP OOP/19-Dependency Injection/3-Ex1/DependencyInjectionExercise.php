<?php


class University
{
    public $universityName;

    function __construct($name)
    {
        $this->universityName = $name;
    }
}

class Student extends University
{
    public $studentName;

    function __construct($name, University $university)
    {
        $this->studentName = $name;
        $this->universityName = $university->universityName;
    }
}

$university = new University('Boston University');
$student = new Student('John', $university);

echo "University Name: " . $student->universityName . PHP_EOL;
echo "Student Name: " . $student->studentName . PHP_EOL;



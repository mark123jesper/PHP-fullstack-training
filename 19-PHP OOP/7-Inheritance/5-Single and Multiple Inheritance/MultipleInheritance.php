<?php


class University
{
    public $name = "Boston University";
    function helloUniversity()
    {
        echo "Hello from University Class" . PHP_EOL;
    }
}

class Teacher extends University
{

    public $name = "Jane";
    private $workingHours = 40;

    function helloTeacher()
    {
        echo "Hello from Teacher Class" . PHP_EOL;
    }

    function calculateSalary($perHour): int{
        return $perHour * $this->workingHours;
    }
}

class PartTimeTeacher extends Teacher{
    private $workingHours = 10;

    function calculateSalary($perHour) : int{
        return $perHour * $this->workingHours;
    }
    function helloPartTimeTeacher()
    {
        echo "Hello from Part Time Teacher Class" . PHP_EOL;
    }
}

$teacher1 = new PartTimeTeacher();
$teacher1->helloUniversity();
$teacher1->helloTeacher();
echo $teacher1->calculateSalary(10) . PHP_EOL;

$teacher2 = new Teacher();
$teacher1->helloUniversity();
$teacher1->helloTeacher();
echo $teacher2->calculateSalary(10) . PHP_EOL;
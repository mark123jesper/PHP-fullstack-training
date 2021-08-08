<?php


class Employee
{

    private $id;
    private $name;
    private $workingHoursPerDay = 8;
    private $hourlyRate = "15";
    private $totalLeaveTaken;
    private $workingDays;

    function __construct($id, $name, $totalLeaveTaken)
    {
        $this->id = $id;
        $this->name = $name;
        $this->totalLeaveTaken = $totalLeaveTaken;
    }

    function getSalaryAmount($totalDays) : int{
        $this->workingDays = $totalDays - $this->totalLeaveTaken;
        $salary = $this->workingDays * $this->workingHoursPerDay * $this->hourlyRate;
        return $salary;

    }

    function getName(){
        return $this->name;
    }


    function getWorkingDays(){
        return $this->workingDays;
    }

    function getTotalLeaveTaken(){
        return $this->totalLeaveTaken;
    }
}

$emp1 = new Employee(101, "John, Smith", 4);
$emp2 = new Employee(102, "Jacob", 2);

//Employee 1
$salary = $emp1->getSalaryAmount(20);
echo $emp1->getName() . " has worked for " . $emp1->getWorkingDays() . " and taken " . $emp1->getTotalLeaveTaken() . " leaves." . PHP_EOL;
echo $emp1->getName() . " salary is $salary" . PHP_EOL;

//Employee 2
$salary = $emp2->getSalaryAmount(20);
echo $emp2->getName() . " has worked for " . $emp2->getWorkingDays() . " and taken " . $emp2->getTotalLeaveTaken() . " leaves." . PHP_EOL;
echo $emp2->getName() . " salary is $salary" . PHP_EOL;
<?php

class Employee{

    public $hours = 600;
    public $hourPrice = 10;

    function calculateSalary(){
        return $this->hours * $this->hourPrice;
    }

    /*
    //You cannot overload same method with different signature of method.
    function calculateSalary($hours, $hourPrice){
        return $hours * $hourPrice;
    }
    */
}

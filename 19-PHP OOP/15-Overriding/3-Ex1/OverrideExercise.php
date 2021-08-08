<?php

class Doctor{
    function calculateFees($hours){
        return 10 * $hours;
    }
}

class Specialist extends Doctor{

    function calculateFees($hours){
        return 25 * $hours;
    }

}

$doctor = new Doctor();
$doctor->calculateFees(2);
$specialist = new Specialist();
$specialist->calculateFees(2);

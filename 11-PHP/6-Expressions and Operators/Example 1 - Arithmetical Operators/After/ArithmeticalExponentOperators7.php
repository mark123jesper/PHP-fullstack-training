<?php

/*
 * Addition = +
 * Subtraction = -
 * Multiplication = *
 * Division = /
 * Modulus = %
 * Exponentiation = **
 *
 */

//Sample 1
//Calculate the Student Total Marks for 3 Subjects
$maths = 70;
$science = 30;
$english = 80;
$totalMarks = $maths + $science + $english;
echo "Student Total Marks: $totalMarks for Maths($maths) + Science($science) + English($english)" . PHP_EOL;

//Sample 2
//Display the total without a $totalMarks Variable
echo "Student Total Marks: $maths + $science + $english for Maths($maths) + Science($science) + English($english)" . PHP_EOL;
echo "Student Total Marks: ", ($maths + $science + $english) , " for Maths($maths) + Science($science) + English($english)" . PHP_EOL;

//Sample 3
//Find the difference between marks achieved and total marks
$totalSubjects = 300;
$totalDifference = $totalSubjects - $totalMarks;
echo "Difference between total and marks achieved: $totalDifference";

//Sample 4
//Calculate the area using length and breath
$length = 10;
$breath = 20;
$area = $length * $breath;
echo $area;


//Sample 5
//Calculate the Percentage of Overall Scored Marks
$percentage = ($totalMarks / $totalSubjects) * 100;
echo PHP_EOL . "Percentage Scored: $percentage%" . PHP_EOL;

//Sample 6
//Use the Modulus Operator
//Check if the remainder is 0 or 1
$a = 100 % 5;
echo $a . PHP_EOL;

$a = 101 % 5;
echo $a . PHP_EOL;

$a = 105 % 5;
echo $a . PHP_EOL;

$a = 106 % 5;
echo $a . PHP_EOL;

//Sample 7
//Check Multiplication $result = a2 * b2;
$a = 10;
$b = 20;
$result = ($a ** 2) * ($b**2);
//($a * $a) * ($b * $b)
echo $result;


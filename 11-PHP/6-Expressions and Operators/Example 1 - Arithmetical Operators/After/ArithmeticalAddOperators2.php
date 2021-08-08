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
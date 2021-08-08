<?php

    /*
     *  = - Assignment Operator used to assign values
     *  += - Add Assignment Operator - .=
     *  -= - Subtract Assignment Operator
     *  *= - Multiple Assignment Operator
     *  /= - Divide Assignment Operator
     *  %= - Modulus Assignment Operator
     *
     */

    //Sample 1
    //Assign value 10 to variable $marks
    $marks = 10;

    //Assign any name string to variable $name
    $name = "John, Smith";

    // Use += operator
    $counter = 1;
    $counter = $counter + 1;
    $counter += 1;
    echo $counter . PHP_EOL;

    $name1 = "John";
    $name1 .= ", ";
    $name1 .= "Smith";
    echo $name1  . PHP_EOL;

    //Sample 2
    // Use -=
    $counter = 10;
    $counter = $counter - 1;
    echo $counter . PHP_EOL;
    $counter -= 1;
    echo $counter . PHP_EOL;

    // Use *= Operators
    $square = 10;
    $square *= $square;
    echo $square . PHP_EOL;

    //Sample 3
    // Use /=
    $divideby2 = 50;
    $divideby2 /= 2;
    echo $divideby2 . PHP_EOL;

    // Use %=
    $remainder = 50;
    $remainder %= 2;
    echo $remainder . PHP_EOL;

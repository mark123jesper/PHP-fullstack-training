<?php

    /*
     * Integers are whole numbers
     * Integer values does not have decimals.
     * Integers could have + or - values
     * Integer Variable can hold Octal (base 8), Hexadecimal(base 16) and Binary (base 2) Values
     * Every Platform will have limited integer number to be defined.
     * Constant PHP_INT_SIZE can be used to find out the integer limit.
     *
     */

    //Define and Print Integer Variable
    $marks = 87;
    echo $marks . PHP_EOL;

    //Hexadecimal Variable
    //https://www.binaryhexconverter.com/decimal-to-hex-converter
    $marks = 0x19F2D7C1; //435345345
    echo $marks . PHP_EOL;

    //String to Integer Addition
    $marks = 10;
    $total = "1000" + $marks;
    echo $total . PHP_EOL;

    //Negative Integers
    $finalMarks = 5 - 10;
    echo $finalMarks . PHP_EOL;

    $finalMarks = -5 + 5;
    echo $finalMarks . PHP_EOL;

    //For Windows, depends on 32 bits or 64 bits.
    echo PHP_INT_MAX . PHP_EOL;








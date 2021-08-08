<?php

    /*
     * Unary - !, ++, --
     * Multiplication - * / %
     * Add/Subtract - +, -
     * Relational - <, >, <=, >=
     * Equality - ==, !=
     * Logical AND - &&
     * Logical OR - ||
     * Conditional - ?:
     * Assignment - =, +=, -=, *=, /=, %=.
     *
     */

    $val = 10;
    echo $val++;
    $counter = $val++;
    echo $counter;

    //Guess the output
    $val = 5 * 2 + 5; //(5*2) + 5
    echo $val;

    //Classic - Assignment has higher precedence over and
    $result1 = true && false ;
    $result2 = true and false;

    echo ($result1) ? "true": "false";
    echo PHP_EOL;
    echo ($result2)? "true": "false";
    echo PHP_EOL;

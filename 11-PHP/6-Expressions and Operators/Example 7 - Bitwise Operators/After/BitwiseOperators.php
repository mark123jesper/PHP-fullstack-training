<?php

    /*
     * & - AND
     * | - OR
     * ^ - XOR
     * ~ - NOT - Works on one operator like ++ and -- - Unary Operator
     *
     */

    //How Bits work
    // 0 - bits - 0000
    // 1 - bits - 0001
    // 2 - bits - 0010
    // 3 - bits - 0011
    // 4 - bits - 0100
    // 5 - bits - 0101

    // 1 - 1 = 1
    // 0 - 0 = 0
    // 0 - 1 = 0
    // 1 - 0 = 0

    $first = 0; //0000
    $second = 1; //0001

    // 0000 & 0001 = (0&0) & (0&0) & (0&0) & (0&1) = 0000
    echo $first & $second . PHP_EOL;

    $first = 2; //0010
    $second = 3; //0011

    //0010 & 0011 = (0&0) & (0&0) & (1&1) & (0&1) = 0010
    echo $first & $second . PHP_EOL;

    echo $first | $second . PHP_EOL; //0 - 1 = 1
    echo $first ^ $second . PHP_EOL; //0 - 1 = 1 and 1 - 1 = 0
    echo ~$first . PHP_EOL; //Invert the bits if 0 then 1 or 1 then 0.
    echo ~$second . PHP_EOL;

<?php

    /*
     * Decimals are real numbers
     * Decimals have decimal points
     * Use round() method with precision
     *
     */

    //Define and Print Decimal Variable
    $totalScore = 78.87;
    echo $totalScore . PHP_EOL;

    //Negative Decimals
    $temparature = -40.23;
    echo $temparature . PHP_EOL ;

    //Round a Double Value
    $price = 4.99;
    echo round($price) . PHP_EOL;

    //Compare two Double with Precision 0.1 = 1.87 ~ 1.97
    $price = 1.87;
    $bid = 1.97;
    echo ( abs($price - $bid) < 0.1 ) ? "Accepted" : "Rejected";

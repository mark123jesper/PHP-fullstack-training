<?php

/*
 * EQUAL TO = ==
 * DATA TYPE AND VALUE IDENTICAL = ===
 * NOT EQUAL TO = != / <> /  !==
 * GREATER THAN = >
 * LESS THAN = <
 * GREATER THAN OR EQUAL TO = >=
 * LESS THAN OR EQUAL TO = <=
 *
 */

    //Sample 1
    //Use EQUAL TO (==) operator to check PHP version
    $php_version = 7.3;
    $php_system_version = PHP_MAJOR_VERSION . "." . PHP_MINOR_VERSION;
    echo ($php_version == $php_system_version) ? "Version Matched" : "Version Does not Matched!";

    //Sample 2
    // DATA TYPE and VALUE IDENTICAL ( -=== )
    $name1 = "10";
    $name2 = 10;
    echo PHP_EOL;
    echo ($name1 == $name2) ? "Name Matched" : "Name Does not Matched!";
    echo PHP_EOL;
    echo ($name1 === $name2) ? "Name Matched" : "Name Does not Matched!";
    echo PHP_EOL;
    $name3 = "10";
    echo ($name1 === $name3) ? "Name Matched" : "Name Does not Matched!";
    echo PHP_EOL;

    //Sample 3
    //Find Oranges using !=, <> and !==
    $specialfruit = "Oranges";
    $fruit1 = "Apple";
    $fruit2 = "Oranges";

    echo ($specialfruit != $fruit1) ? "It is not Oranges" : "It is Oranges";
    echo PHP_EOL;
    echo ($specialfruit != $fruit2) ? "Oranges not found" : "Oranges Found!";
    echo PHP_EOL;
    echo ($specialfruit <> $fruit2) ? "Oranges not found" : "Oranges Found!";
    echo PHP_EOL;
    echo ($specialfruit !== $fruit2) ? "Oranges not found" : "Oranges Found!";
    echo PHP_EOL;

    //Sample 4
    //Find the senior citizen whose age greater than 60 using greater operator.
    $citizen1 = "John";
    $citizen2 = "Walter";
    $citizen3 = "Ajit";

    $agelimit = 60;
    $citizenage1 = 40;
    $citizenage2 = 64;
    $citizenage3 = 80;

    echo ( $citizenage1 > $agelimit) ? "$citizen1 is senior citizen" : "$citizen1 is not senior.";
    echo PHP_EOL;
    echo ( $citizenage2 > $agelimit) ? "$citizen2 is senior citizen" : "$citizen2 is not senior.";
    echo PHP_EOL;
    echo ( $citizenage3 > $agelimit) ? "$citizen3 is senior citizen" : "$citizen3 is not senior.";
    echo PHP_EOL;


<?php

    //https://www.php.net/manual/en/ref.strings.php
    //'.' (dot) operator is used to combine strings together

    $firstName =  "John";
    $lastName =  ", Smith";
    $fullName = $firstName . $lastName;
    echo $fullName . PHP_EOL;

    $Marks = 10;
    $passed = true;
    //Add String, Integer, Boolean any other basic variable types with "." operator.
    $content = "Student $fullName got Total " . $Marks . " he is passed - " . $passed;
    echo $content . PHP_EOL;


<?php


    $male = "John, Smith";
    $gender = "male";

    //Print Male student
    //echo $$gender;

    $student = "John, Smith";
    $male = "student";
    $gender = "male";

    echo $gender . "<br>";
    echo $$gender . " = $male<br>";
    echo $$$gender . " = $student<br>";


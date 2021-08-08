<?php

    //Define a Variable
    $name = "John, Smith";

    //Variable can be used as string or integer
    $message = 1;
    $message = "PHP is the best!";
    echo $message .  "<br>";

    //Print variable with double quotes
    echo "name variable = $name" .  "<br>";
    echo 'name variable = $name' .  "<br>";

    //Variable Typing convert between string to integer or any data types.
    $length = "10";
    $breath = 20;
    $area = $length * $breath; //Variable Typing Example
    echo "Area: $area" . "<br>";

    //Variables are case sensitive
    $Name = "Walter White";
    echo "$name is not equal to $Name" . "<br>";

    //Variable Scope
    $counter = 1;
    function show_counter() {
        $counter = 2;
        echo $counter . "<br>";
    }
    show_counter();
    echo $counter . "<br>";

    //Global Variables
    global $count;
    $count = 1;
    function show_global_counter() {
        $count = 2;
        echo $count . "<br>";
    }
    show_global_counter();
    echo $count . "<br>";

    //Static Variable
    function counter_static()
    {
        static $count = 1;
        echo $count . "<br>";
        $count = $count + 1;
    }
    counter_static();

    //Predefined Variables
    function print_global_variable() {
        echo $GLOBALS['count'];
    }

    //Variable of Variables
    $countofcount = "count";
    echo $$countofcount;

    //isset()
    echo isset ($$countofcount) ? "Variable is set": "Variable is not set";
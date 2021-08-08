<?php

    //Anonymous function does not have a function name.
    //They are also called as Closures

    /*
    function add($a, $b) : int{
        $addition = $a + $b;
        return $addition;
    }

    $addFunction = "add";
    echo "Result: " . $addFunction(1,2) , PHP_EOL;
    */

    $addFunction = function ($a, $b) : int {
        $addition = $a + $b;
        return $addition;
    };
    echo $addFunction(1, 2) . PHP_EOL;

    //Variable $content cannot be accessed
    $content = "This is a String message";
    /*
    $printContent = function () {
        echo $content;
    };
    */
    $printContent = function () use($content) {
        echo $content;
    };
    $printContent();

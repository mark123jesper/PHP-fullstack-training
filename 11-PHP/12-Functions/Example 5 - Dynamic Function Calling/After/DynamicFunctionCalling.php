<?php

    function add($a, $b) : int{
        $addition = $a + $b;
        return $addition;
    }

    $addFunction = "add";
    echo "Result: " . $addFunction(1,2) , PHP_EOL;



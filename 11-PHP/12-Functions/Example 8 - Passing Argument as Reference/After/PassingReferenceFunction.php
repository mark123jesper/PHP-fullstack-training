<?php

    /*
    $result = 0;
    function add($a, $b, $result = null) : int{

        $addition = $a + $b;
        return $addition;
    }

    echo $result . PHP_EOL;
    $result = add(1,2) ;
    echo $result . PHP_EOL;
    */


    $result = 0;
    function add($a, $b, &$result = null){

        $result = $a + $b;
    }

    echo $result . PHP_EOL;
    add(1,2, $result) ;
    echo $result . PHP_EOL;


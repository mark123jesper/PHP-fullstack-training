<?php

    //If Index is not specified, PHP will use the increment of the largest previously used integer key.

    $arr = [];
    $arr[0] = 1;
    $arr[2] = "String";
    $arr[4] = true;
    $arr[10] = 14.5;

    //Adding new values to array
    $arr[] = "New String 1";
    $arr[] = "New String 2";

    //Guess the Output - Think how it might work for a sec.
    var_dump($arr);

    $arr[0] = "Previously 1 and now Changed Value";
    foreach($arr as $values){
        echo $values . PHP_EOL;
    }

    //Curious to know what is inside index of 1
    //For loop is bad sometimes. Recommendation is to use foreach loop for arrays
    echo $arr[1] . PHP_EOL;



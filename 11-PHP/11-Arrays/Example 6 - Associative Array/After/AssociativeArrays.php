<?php


    //In Associative Arrays, you specify the index.
    //index => value
    // => is a special symbol to represent key and value.
    //key => value - key is the index and value is the value at that index.

    //Indexed Array
    $arr = [ "Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun"];
    var_dump($arr);
    foreach($arr as $values){
        echo $values . PHP_EOL;
    }

    //Associative Array
    $arr = [ 0 => "Mon", 1 => "Tues", 2 => "Wed", 3 => "Thurs", 4 => "Fri", 5 => "Sat", 6 => "Sun"];
    var_dump($arr);

    foreach($arr as $values){
        echo $values . PHP_EOL;
    }

    foreach($arr as $key => $values){
        echo "$key => $values" . PHP_EOL;
    }

    //=> is a symbol to represent the array element association to variables.
    foreach($arr as $key1 => $values1){
        echo "$key1 => $values1" . PHP_EOL;
    }

    //Print all keys
    print_r ( array_keys($arr) );

    //Access only key
    foreach(array_keys($arr) as $key){
        echo $key . PHP_EOL;
    }
    //Access only value
    foreach($arr as $value){
        echo $value . PHP_EOL;
    }

    $userDetails = [
        "John" => "john@gmail.com",
        "Jenny" => "jenny@gmail.com",
        "Ajit" => "ajit@gmail.com",

    ];

    var_dump( $userDetails );
    echo $userDetails["John"] . PHP_EOL;
    echo $userDetails["Jenny"] . PHP_EOL;
    echo $userDetails["Ajit"] . PHP_EOL;

    $userDetails["Mary"] = "mary@gmail.com";
    var_dump($userDetails);

    //Error - 0 is not the key anymore. Index is not element position.
    //echo $userDetails[0] . PHP_EOL;

    $userDetails[0] = "user@gmail.com";
    var_dump($userDetails);

    echo $userDetails[0] . PHP_EOL;

    //Guess the Output
    $userDetails[] = [ "Jane" => "jane@gmail.com" ];

    //Replaced the existing array.
    var_dump($userDetails);
    echo $userDetails["Jane"] . PHP_EOL;

    //Add an element at end of the array
    $userDetails = [
        "John" => "john@gmail.com",
        "Jenny" => "jenny@gmail.com",
        "Ajit" => "ajit@gmail.com",

    ];
    $userDetails["Jane"] = "jane@gmail.com";
    var_dump($userDetails);


<?php

    //Define an Array
    //Reference: https://www.php.net/manual/en/language.types.array.php
    //As of PHP 5.4 you can also use the short array syntax, which replaces array() with [].
    $arr = [1, 2, 3];

    //functions to print array
    var_dump($arr);

    //Human Readable
    print_r($arr);

    //echo $arr; //Error

    //Access and Print Arrays
    echo $arr[0] . PHP_EOL;
    echo $arr[1] . PHP_EOL;
    echo $arr[2] . PHP_EOL;

    echo "$arr[0]" . PHP_EOL;
    echo "$arr[1]" . PHP_EOL;
    echo "$arr[2]" . PHP_EOL;

    //$arr is a Array Variable
    //$arr[0] is a Array Element
    //0 is a index of Array
    //Array index starts with 0 not 1
    //Arrays can store any type of value - String, Integer or Boolean
    //Arrays has a length based on the number of elements it has.
    //You can have array inside an array - more about it in next lecture.
    //Usecase: Collection of variables together.


    echo "Array Length: " . count($arr) . PHP_EOL;
    //Loop thru the Array using For Loop
    for($count = 0; $count < count($arr); $count++){
        echo $arr[$count] . PHP_EOL;
        echo "$arr[$count]" . PHP_EOL;
    }

    //Access Array Element inside the String using Constant use {}
    const ARRAY_ELEMENT = 1;
    echo "{$arr[ARRAY_ELEMENT]}" . PHP_EOL;

    //Change Array Elements
    print_r($arr);
    $arr[0] = 5;
    $arr[1] = 6;
    $arr[2] = 7;
    print_r($arr);

    //Change Array Elements with Different Data Types
    var_dump($arr);
    $arr[0] = "This is a String";
    $arr[1] = true;
    $arr[2] = 7.5;
    var_dump($arr);

    //Store any type of data types
    //See the indentation works.
    $arr1 = [ 1,
        "String",
        false,
        23.2
    ];
    var_dump($arr1);


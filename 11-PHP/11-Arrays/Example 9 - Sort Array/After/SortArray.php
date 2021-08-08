<?php

    //sort() and rsort()
    //Indexed Array
    $arr = [ 5, 2, 4, 3, 0, 1];
    print_r( $arr );
    sort($arr);
    print_r( $arr );
    rsort($arr);
    print_r( $arr );

    //asort() and arsort()
    //Associative Array
    $arr1 = [ "3" => "John", "1" => "Ajit", "2" => "Roger"];
    echo "Associative Array Sort by Values" . PHP_EOL;
    print_r( $arr1 );
    asort($arr1);
    print_r( $arr1 );
    arsort($arr1);
    print_r( $arr1 );


    //ksort() and krsort()
    //Associative Array
    echo "Associative Array Sort by Key" . PHP_EOL;
    print_r( $arr1 );
    ksort($arr1);
    print_r( $arr1 );
    krsort($arr1);
    print_r( $arr1 );

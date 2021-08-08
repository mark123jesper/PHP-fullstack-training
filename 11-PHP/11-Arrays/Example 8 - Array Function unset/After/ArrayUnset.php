<?php


    $arr = [1, 2, 3, 4, 5];
    print_r($arr);

    unset($arr[4]);
    print_r($arr);

    $arr[] = 5;
    print_r($arr);

    $arr1 = [ "first" => 1, 2, 3, 4, "last" => 5];
    print_r($arr1);

    unset($arr1["last"]);
    print_r($arr1);

    $arr1["last"] = 5;
    print_r($arr1);

    $arr1[] = 6;
    print_r($arr1);
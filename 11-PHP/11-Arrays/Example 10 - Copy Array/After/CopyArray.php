<?php

    //Sample 1
    $arr = [0, 1, 2, 3, 4, 5];
    $arr1 = $arr;
    var_dump($arr1);

    //Sample 2
    $arr2 = [];
    foreach($arr as $values){
        $arr2[] = $values;
    }
    var_dump($arr2);

    //Sample 3
    $arr3 = [ "3" => "John", "1" => "Ajit", "2" => "Roger"];
    $arr4 = $arr3;
    var_dump($arr4);

    //Sample 4
    $arr5 = [];
    foreach($arr4 as $key => $value){
        $arr5[$key] = $value;
    }
    var_dump($arr5);
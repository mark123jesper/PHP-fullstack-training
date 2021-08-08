<?php


    //Index Arrays are sequence array of element with integer index numbers.
    //Mostly it is in sequence.
    //Index starts with 0
    //New elements get the index of highest index + 1 number.
    //You can always break the sequence and add new elements to future index.

    $arr = [1, 2, 3, 4, 5];
    var_dump($arr);

    $arr[100] = 100;
    var_dump($arr);

    $arr[] = 101;
    var_dump($arr);

    $arr = [ "Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun" ];
    var_dump( $arr );




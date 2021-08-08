<?php


    echo date_create('now')->format('Y-m-d H:i:s') . PHP_EOL;
    echo date_create('+1 day')->format('Y-m-d H:i:s') . PHP_EOL;
    echo date_create('-1 day')->format('Y-m-d H:i:s') . PHP_EOL;

    $strTime = strtotime("2019-05-21 9:00:00");
    echo date( "d:m:y h:i:s", $strTime) . PHP_EOL;

    if(time() >= $strTime ){
        echo "Time is ahead";
    }else{
        echo "Time is not ahead";
    }
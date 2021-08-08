<?php

    // Find the String position inside the String.
    $content = "This is a very long content and it is a string.";
    $findContentWord = "content";
    $position = strpos($content, $findContentWord);
    echo $position . PHP_EOL;

    $findContentWord = "content1";
    $position = strpos($content, $findContentWord);
    echo $position . PHP_EOL;
    echo true . PHP_EOL;
    echo false . PHP_EOL;
    echo true . PHP_EOL;

    if( $position === false ) {
        echo "1) Not Found!" . PHP_EOL;
    }

    $findContentWord = "This";
    $position = strpos($content, $findContentWord);

    //Able to find but still canot check.
    //Because position is 0 and 0 in condition is treated as false.
    if( !$position ) {
        echo "$position Value" . PHP_EOL;
        echo "2) Not Found!" . PHP_EOL;
    }

    if( !0 ){
        echo "False Condition" . PHP_EOL;
    }

    if( $position === false ) {
        echo "3) Not Found!" . PHP_EOL;
    }


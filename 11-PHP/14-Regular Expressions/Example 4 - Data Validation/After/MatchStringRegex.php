<?php

    $str = "This a long string which has year 1999.";

    // /[0-9]/
    // /string/
    if( preg_match("/[0-9]/", $str )) {
        echo "String is found!";
    }else{
        echo "String is NOT found!";
    }


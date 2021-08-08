<?php

    //Sample 1
    //https://www.php.net/manual/en/language.variables.superglobals.php
    global $message;
    $message = "Welcome to PHP";
    echo $GLOBALS['message'] . "<br>";

    //Sample 2
    //https://www.php.net/manual/en/reserved.variables.server.php
    echo "File Name: " .  $_SERVER['PHP_SELF'] ;


    //Sample 3
    global $name;
    $name = "John, Smith";

    function print_name() {
        echo $GLOBALS['name'];
    }

    print_name();
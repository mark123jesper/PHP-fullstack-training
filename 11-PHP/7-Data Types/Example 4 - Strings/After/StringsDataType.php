<?php

    /*
     * Strings are defined in Double quotes and Single Quotes.
     * Double Quotes string will interpolate variables values and single quote does not.
     * No limited to how much string variable holds but limited with system memory.
     * Use Escape Character to escape double quotes inside double quotes and other characters.
     * String methods are available to work with string manipulation
     *
     */


    //Define String and use Strings
    $name1 = "John, Smith";
    $name2 = 'John, Smith';
    echo "$name1 and $name2" . PHP_EOL;
    echo '$name1 and $name2' . PHP_EOL;

    //Combine Strings
    $name3 = $name1 . " - " . $name2;
    echo $name3 . PHP_EOL;

    //Use back slach to escape the characters
    $name4 = "This is a \"Special\" String";
    echo $name4 . PHP_EOL;

    $name4 = "\t\tThis is a \"Special\" String";
    echo $name4 . PHP_EOL;

    $name4 = "\T\h\i\s is a \"Special\" String";
    echo $name4 . PHP_EOL;

    $name4 = '\t\h\i\s is a \"Special\" String';
    echo $name4 . PHP_EOL;

    echo strlen( $name4 ) .PHP_EOL;

    //How to Search the Manual https://www.php.net/ for String Methods.
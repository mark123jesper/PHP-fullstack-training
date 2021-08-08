<?php

    //Rule 1: Always start variable name with $
    $message = "Hello PHP!";
    echo $message;

    //Rule 2: First Character after $ should character or _
    $name = "PHP";
    //$1name = "PHP";
    //$_1name = "PHP";
    //$-name = "PHP";
    echo $name;


    //Rule 3: Variable can only contains a-z, A-Z. 0-9 and _
    $name1 = "PHP";
    $n1ame = "PHP";
    $first_name = "PHP";

    //$first-name = "PHP";


    //Rule 4: No space in the variables
    //$first name = "PHP";


    //Rule 5: Define same variable multiple times
    $message = "This is a Variable";
    echo $message;

    //Rule 6: Change the Variable value from String to Integer
    $message = 1;
    echo $message;

?>
<?php

    //Empty Variable
    $name;
    echo $name;

    //Check if variable is defined
    echo isset($name)? "Variable Set": "Variable is not set";
    echo "<br>";

    $name = "John, Smith";
    echo isset($name)? "Variable Set": "Variable is not set";
    echo "<br>";

    $firstname = "Test";
    $name = $firstname;
    echo isset($name)? "Variable Set": "Variable is not set";

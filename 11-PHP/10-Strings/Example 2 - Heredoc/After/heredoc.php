<?php

    $name ="John, Smith";
    $number = 10;
    //Write a block of strings with heredoc
    echo <<< DOC_LABEL
    You can write anything inside this
    "Double Quotes" . anything 
    'Single Quites' ... . . . . 
    $name knows how to write PHP
    ($number * 10)
    New Lines and Strings.
    (true) ? "Some Effect" : "No Effect";
    PHP_EOL
    <strong>Is this bold?</strong>
    Apart from Variable interpolation nothing will work.
    
DOC_LABEL;


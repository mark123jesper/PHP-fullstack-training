<?php

    /*
     1) Learn to use the following String Functions
        - Number of Words
        - Replace Strings
        - Reverse Strings
        - Remove White Spaces
        - Shuffle Strings
        - Find Position case insenstive.
        - Upper and Lowercase
        - Word Wrap the String and display it.

     */


    $content = "You can do string operations easily with String Functions";
    $findWord = "operations";
    $position = -1;

    echo "\"$content\"" . PHP_EOL;
    //Number of Words
    echo "Number of Words in the String: " . str_word_count($content) . PHP_EOL;
    //Replace Strings
    echo "Find and Replace operations with manipulation: " . str_replace("operations", "manipulations", $content) . PHP_EOL;
    //Reverse Strings
    echo strrev($content) . PHP_EOL;
    //Remove White Spaces - ltrim and rtrim
    $content = "    " . $content . "    ";
    echo $content . PHP_EOL;
    echo trim($content) . PHP_EOL;
    //Shuffle Strings
    echo str_shuffle($content) . PHP_EOL;
    //Find Position case insenstive.
    echo stripos($content, "OPERATIONS") . PHP_EOL;
    //UPPER and lower case
    echo strtoupper($content) . PHP_EOL;
    echo strtolower($content) . PHP_EOL;
    //Word Wrap the String and display it.
    $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
    echo wordwrap($content, 25) . PHP_EOL;
    echo $content . PHP_EOL;



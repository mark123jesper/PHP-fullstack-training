<?php

    $pattern = "/good/"; //Found
    //$pattern = "/the/"; / Not Found
    $text = "This is a good example of regular expression.";
    if (preg_match($pattern, $text)) {
        echo "Match found!";
    } else {
        echo "Match not found.";
    }

    $pattern = "/\s/"; //Found
    $replacement = "-";
    //$pattern = "/the/"; / Not Found
    $text = "This is a good\n example of\t regular expression.";

    echo preg_replace($pattern, $replacement, $text);


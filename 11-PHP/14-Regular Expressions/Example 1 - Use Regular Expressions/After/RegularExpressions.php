<?php

    /*
        Regular Expressions, commonly known as "regex" or "RegExp"
        Quantifiers:
            . = Single Character
            * = many
            + = Atleast One
            {} = Show Iterations
            ^ = Starting
            $ = Ending
            | = or
        Brackets:
            [0-9] = Integers
            [a-z] = Lowercase Alphabets Characters from a to z
            [A-Z] = Uppercase Alphabets Characters from A to Z
            [a-Z] = Any case Alphabets Characters from a to Z
        MetaCharacters"
            \s = Whitespace, tab, newline
            \S = Nonwhitespace character
            \d = digit
            \D = nondigit
            \w = word
            \W = non-word
            [aeiou] = Match character in set.
            [this|or|that] = Match this or that.
            i = case insesitive
        Functions:
            preg_match()
            preg_match_all()
            preg_replace()
            preg_grep()
            preg_split()
            preg_quote()
    */


    $pattern = "/SS/i";
    $text = "This is a good example of regular expression.";
    if (preg_match($pattern, $text)) {
        echo "Match found!";
    } else {
        echo "Match not found.";
    }

    $pattern = "/[x*]/";
    $text = "This is a good example of regular expression.";
    if (preg_match($pattern, $text)) {
        echo "Match found!";
    } else {
        echo "Match not found.";
    }
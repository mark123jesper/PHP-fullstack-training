<?php


    //date(format, timestamp)
    /*
        d - Represent day of the month; two digits with leading zeros (01 or 31)
        D - Represent day of the week in text as an abbreviation (Mon to Sun)
        m - Represent month in numbers with leading zeros (01 or 12)
        M - Represent month in text, abbreviated (Jan to Dec)
        y - Represent year in two digits (08 or 14)
        Y - Represent year in four digits (2008 or 2014)
     */
    echo "Current Date: " . date("d-m-y") . PHP_EOL;
    echo "Current Date: " . date("D-M-Y") . PHP_EOL;

    /*
        h - Represent hour in 12-hour format with leading zeros (01 to 12)
        H - Represent hour in in 24-hour format with leading zeros (00 to 23)
        i - Represent minutes with leading zeros (00 to 59)
        s - Represent seconds with leading zeros (00 to 59)
        a - Represent lowercase ante meridiem and post meridiem (am or pm)
        A - Represent uppercase Ante meridiem and Post meridiem (AM or PM)
     */

    echo "Current Date: " . date("d-m-y h:i:s:a") . PHP_EOL;
    echo "Current Date: " . date("d-m-y H:i:s:A") . PHP_EOL;

    //Milli Seconds
    echo "Current Time: " . time() . PHP_EOL;

    $time = time() + 1000;
    //Format timestamp
    echo "Current Date: " . date("d-m-y H:i:s:A", $time) . PHP_EOL;


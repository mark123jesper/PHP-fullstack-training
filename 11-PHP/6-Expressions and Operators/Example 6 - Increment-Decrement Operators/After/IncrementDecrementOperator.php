<?php

    /*
     * ++ = Incremental by 1
     * -- = Decremental by 1
     *
     */

    // Use ++ Increment
    $counter = 10;
    $counter += 1;
    echo $counter . PHP_EOL;

    //Post Increment
    echo $counter++ . PHP_EOL;
    echo $counter . PHP_EOL;

    //Pre Increment
    echo ++$counter . PHP_EOL;
    echo $counter . PHP_EOL;

    // Use -- Decrement
    $counter = 10;
    $counter -= 1;
    echo $counter . PHP_EOL;

    //Post Decrement
    echo $counter-- . PHP_EOL;
    echo $counter . PHP_EOL;

    //Pre Decrement
    echo --$counter . PHP_EOL;
    echo $counter . PHP_EOL;
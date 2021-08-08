<?php

    function counter(){
        $count = 1;
        echo $count . "<br>";
        $count = $count + 1;
    }
    counter();
    counter();
    counter();
    counter();
    counter();

    echo "<hr>";
    echo "<h1>Static Variables</h1>";

    function counter_static(){
        static $count = 1;
        echo $count . "<br>";
        $count = $count + 1;
    }

    counter_static();
    counter_static();
    counter_static();
    counter_static();
    counter_static();
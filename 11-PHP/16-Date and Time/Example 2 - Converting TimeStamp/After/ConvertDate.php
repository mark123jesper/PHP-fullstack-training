<?php

    $dateArr = getdate();

    foreach( $dateArr as $format => $val){
        echo "$format => $val" . PHP_EOL;
    }

    echo "weekday: " . $dateArr["weekday"] . PHP_EOL;
    echo "weekday: " . getdate()["weekday"] . PHP_EOL;
    echo "year: " . getdate()["year"] . PHP_EOL;

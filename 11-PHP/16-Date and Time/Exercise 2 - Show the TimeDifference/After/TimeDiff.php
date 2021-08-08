<?php

    $date1 = time();
    sleep(10);
    $date2 = time();
    $diff = ($date1 - $date2) / 60;
    echo $diff;

    $start = date_create('2019-05-26 12:01:00');
    $end = date_create('2019-05-26 13:15:00');
    $diff=date_diff($end,$start);
    print_r($diff);

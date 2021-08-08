<?php

    $settings = parse_ini_file('test.ini');
    print_r($settings);

    foreach($settings as $val){
        echo $val . PHP_EOL;
    }

    echo $settings['white'] . PHP_EOL;
    echo $settings['font1'] . PHP_EOL;
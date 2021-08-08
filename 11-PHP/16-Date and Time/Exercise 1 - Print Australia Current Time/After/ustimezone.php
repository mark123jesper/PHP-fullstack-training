<?php

    echo date_default_timezone_get() . PHP_EOL;
    echo date('m/d/Y h:i:s a') . PHP_EOL;
    date_default_timezone_set("Australia/Melbourne");
    echo date('m/d/Y h:i:s a') . PHP_EOL;
    echo date_default_timezone_get();

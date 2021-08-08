<?php

//This is called automatically from the PHP when resource not found or registered.
spl_autoload_register(function ($classname){
    echo "Loading class: $classname" . PHP_EOL;
    require_once "$classname.php";
});

$str = new src\StringHelper();
$str->hello();
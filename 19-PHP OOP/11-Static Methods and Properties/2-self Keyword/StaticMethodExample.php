<?php

class Calculator{
    static $result;

    static function add($a, $b){
        self::$result = $a + $b;
    }
}

Calculator::add(1, 2);
echo Calculator::$result;

<?php

class Calculator{
    static $result;
    static function add($a, $b) : int{
        $result = $a + $b;
        return $result;
    }
}
Calculator::$result = 10;
echo Calculator::add(1, 2) . PHP_EOL;
echo Calculator::$result . PHP_EOL;
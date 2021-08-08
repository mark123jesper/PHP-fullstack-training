<?php

class ChainMethods
{
    function method1(){
        echo "Hello from Methods 1" . PHP_EOL;
        return $this;
    }
    function method2(){
        echo "Hello from Methods 2" . PHP_EOL;
    }
}

$cm = new ChainMethods();
$cm->method1()->method2();

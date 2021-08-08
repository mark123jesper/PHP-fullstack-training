<?php


class ChainMethods
{
    public $name = "";
    function method1(){
        echo "Hello from Methods 1" . PHP_EOL;
        $this->name = "Chain Methods";
        return $this;
    }
    function method2(){
        echo "Hello from Methods 2 ($this->name)" . PHP_EOL;
    }
}

$cm = new ChainMethods();
$cm->method1()->method2();

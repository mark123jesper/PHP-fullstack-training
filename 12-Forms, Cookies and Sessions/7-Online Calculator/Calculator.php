<?php


class Calculator
{
    private $a, $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function add(){
        return $this->a + $this->b;
    }
    public function minus(){
        return $this->a - $this->b;
    }
    public function multiply(){
        return $this->a * $this->b;
    }
    public function divide(){
        if( $this->a == 0 || $this->b == 0){
            return 0;
        }
        return $this->a / $this->b;
    }
}
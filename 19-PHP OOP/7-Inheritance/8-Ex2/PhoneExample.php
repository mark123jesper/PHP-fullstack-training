<?php


class Phone
{
    protected $name;
    protected $price;

    function showPrice(){
        echo "$this->name is $this->price" . PHP_EOL;
    }
}

class iOS extends Phone {

    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}
class Android extends Phone{

    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

$p1 = new iOS("Apple", 1500);
$p1->showPrice();

$p2 = new Android("Samsung", 1000);
$p2->showPrice();
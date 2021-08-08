<?php


class Dog
{
    public $color;
    public $breed;

    function dogBark(){
        echo "Woof! Woof!" . PHP_EOL;
    }

    function dogSleep(){
        echo "ZZZZzzzzzz...." . PHP_EOL;
    }
}
$dog1 = new Dog();

//Access the Properties Directly
$dog1->color = "Black";
$dog1->breed = "German Shepard";

//Call Methods
$dog1->dogBark();
$dog1->dogSleep();


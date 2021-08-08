<?php


class Animal
{
    protected $name;
    protected $hunt = false;

    function doesHunting(){
        if($this->hunt){
            echo "Yes, It hunts!" . PHP_EOL;
        }else{
            echo "No, It won't hunts!" . PHP_EOL;
        }
    }
}

class Dog extends Animal {

    function __construct($name, $hunt)
    {
        $this->name = $name;
        $this->hunt = $hunt;
    }

    function makeSound(){
        echo "Woof! Woof!" . PHP_EOL;
    }
}
class Tiger extends Animal{

    function __construct($name, $hunt)
    {
        $this->name = $name;
        $this->hunt = $hunt;
    }

    function makeSound(){
        echo "Grrrr! Grrrr!" . PHP_EOL;
    }
}

$dog1 = new Dog("Hush Puppies", false);
$dog1->makeSound();
$dog1->doesHunting();

$tiger1 = new Tiger("Indian Tiger", true);
$tiger1->makeSound();
$tiger1->doesHunting();
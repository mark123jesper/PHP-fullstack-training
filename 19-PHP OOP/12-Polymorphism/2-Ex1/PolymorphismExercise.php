<?php

//Polymorphism is a concept of OOP
interface Animal{
    function bark();
}

class Dog implements Animal {

    function bark()
    {
        echo "Woof! Woof!";
    }
}

class Cat implements Animal {

    function bark()
    {
        echo "Meow! Meow!";
    }
}
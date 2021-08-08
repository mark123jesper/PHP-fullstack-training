<?php

require_once "Car.php";
class SportsCar implements Car
{
    public function applyBreak()
    {
        echo "Applying Breaks to Car" . PHP_EOL;
    }

    public function increaseSpeed()
    {
        echo "Increasing Speed of the Car" . PHP_EOL;
    }

    public function decreaseSpeed()
    {
        echo "Decreasing Speed of the Car" . PHP_EOL;
    }

}
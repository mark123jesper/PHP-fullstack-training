<?php

require_once "Car.php";
require_once "CarModel.php";

class SportsCar implements Car, CarModel
{
    public $model;

    public function applyBreak()
    {
        echo "Applying Breaks to $this->model Car" . PHP_EOL;
    }

    public function increaseSpeed()
    {
        echo "Increasing Speed of the $this->model Car" . PHP_EOL;
    }

    public function decreaseSpeed()
    {
        echo "Decreasing Speed of the $this->model Car" . PHP_EOL;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getModel(): string
    {
        return $this->model;
    }
}
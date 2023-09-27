<?php

// Абстрактный класс для всех машин
abstract class Vehicle {
    protected $brand;
    protected $model;
    protected $color;

    public function __construct($brand, $model, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    abstract public function driveForward();
    abstract public function driveBackward();
}

// Функция, принимающая объект машины и вызывающая методы
function performAction(Vehicle $vehicle) {
    $vehicle->driveForward();
    $vehicle->useAbility();
}


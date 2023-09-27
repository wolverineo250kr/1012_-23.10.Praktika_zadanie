<?php
// Класс для легковых автомобилей с элементами индивидуализма 
class Car extends Vehicle implements Ability {
    protected $interiorDesign;

    public function __construct($brand, $model, $color, $interiorDesign) {
        parent::__construct($brand, $model, $color);
        $this->interiorDesign = $interiorDesign;
    }

    public function driveForward() {
        echo "Легковой автомобиль {$this->brand} {$this->model} движется вперед.<br>";
    }

    public function driveBackward() {
        echo "Легковой автомобиль {$this->brand} {$this->model} движется назад.<br>";
    }

    public function useAbility() {
        echo "Легковой автомобиль {$this->brand} {$this->model} размахивает антенной сигнализации и включает дворники.<br>";
    }

    public function getInteriorDesign() {
        echo "Легковой автомобиль {$this->brand} {$this->model} имеет отделку салона: {$this->interiorDesign}.<br>";
    }
}

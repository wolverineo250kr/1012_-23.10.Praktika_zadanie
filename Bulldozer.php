<?php
// Класс для бульдозеров
class Bulldozer extends Vehicle implements Ability {
    public function driveForward() {
        echo "Бульдозер {$this->brand} {$this->model} движется вперед.<br>";
    }

    public function driveBackward() {
        echo "Бульдозер {$this->brand} {$this->model} движется назад.<br>";
    }

    public function useAbility() {
        echo "Бульдозер {$this->brand} {$this->model} поднимает и опускает ковш.<br>";
    }
} 

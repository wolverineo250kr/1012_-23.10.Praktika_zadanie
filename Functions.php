<?php  
require_once 'Ability.php';
require_once 'Vehicle.php'; 
require_once 'Car.php';
require_once 'Bulldozer.php';

// Создание объектов машин
$car = new Car("BMW", "X5", "черный");
$bulldozer = new Bulldozer("Caterpillar", "D6", "желтый");

// Вызов функции с различными объектами машин
performAction($car);
performAction($bulldozer);
 
// Создание объекта легкового автомобиля с элементами салона
$car = new Car("BMW", "X5", "черный", "кожа");
$car->getInteriorDesign();
performAction($car);



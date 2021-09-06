<?php

require_once __DIR__ . '/vendor/autoload.php';

use Park\Car;
use Park\Plane;
use Park\Byke;
use Park\Parking;
use Park\Ferry;

Byke::setSpeed(50);
Car::setSpeed(180);
Plane::setSpeed(890.5);

$brompton = new Byke('brompton');
$kia = new Car('kia');

$airbus = new Plane('airbus 320');

$parking = new Parking();
$parking->addPark($brompton);
$parking->addPark($kia);
try {
    $parking->addPark($airbus); // exception

} catch (TypeError $e) {
    echo $e->getMessage();
}

echo $parking . "\n";

$ferry= new Ferry($parking);

$telsa =new Car('tesla');
$parking->addPark($telsa);
echo $parking . "\n";

$parking->getAll();
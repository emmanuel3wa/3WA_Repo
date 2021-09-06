<?php

class Ferry extends Vehicule
{

    private Parking $parking;

    public function __construct(Parking $parking)
    {
        $this->parking = $parking;
    }
    
}

class Parking
{
    private array $parkables;
    private int $countPark = 0;

    public function count(): int{
        return $this->countPark;
    }

    public function addPark(Parkable $parkable){
        $this->parkables[] = $parkable;
        $this->countPark = $this->countPark + 1;
    }

    public function removePark(Parkable $parkable){
        if (($key = array_search($parkable, $this->parkables)) !== false) {
            unset($this->parkables[$key]);
        }
    }

    public function __toString() {
       return PHP_EOL ."Il y a {$this->countPark} vehicule(s) dans ce parking" . PHP_EOL;
    }

    public function getAll(){
        foreach($this->parkables as $mobile)
            echo PHP_EOL ."Il y a un(e) {$mobile->getName()} allant a {$mobile::getSpeed()} km/h ". PHP_EOL;
    }
}

abstract class Vehicule
{
   
    private string $name;

}

class Plane extends Vehicule
{

    private static float $vSpeed = 0;

    public static function getSpeed(){
        return self::$vSpeed;
    }
    
    public static function setSpeed(float $speed){
        self::$vSpeed = $speed;
    }

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName() : string{
        return $this->name;
    }
}

class Car extends Vehicule implements Parkable
{
    private static float $vSpeed = 0;

    public static function getSpeed(){
        return self::$vSpeed;
    }

    public static function setSpeed(float $speed){
        self::$vSpeed = $speed;
    }

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName() : string{
        return $this->name;
    }

    public function pay(float $price){}
    public function park(string $address, string $place){}
}

class Byke extends Vehicule implements Parkable
{
    private static float $vSpeed = 0;

    public static function getSpeed(){
        return self::$vSpeed;
    }

    public static function setSpeed(float $speed){
        self::$vSpeed = $speed;
    }

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName() : string{
        return $this->name;
    }

    public function pay(float $price){}
    public function park(string $address, string $place){}
}

interface Parkable{
    public function pay(float $price);
    public function park(string $address, string $place);
}

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
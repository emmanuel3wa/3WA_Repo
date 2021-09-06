<?php namespace Park;

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
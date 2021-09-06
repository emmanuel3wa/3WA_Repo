<?php namespace Park;

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
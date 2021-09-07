<?php

class Bike implements Productable{


    private string $name;
    private float $price = 0.;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice(float $price){
        $this->price = $price;
    }

}
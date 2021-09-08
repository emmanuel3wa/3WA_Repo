<?php

class Product implements Productable{

    public function __construct(private string $name, private float $price)
    {
        
    }

    public function setPrice(float $price){
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getName(){
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }


}
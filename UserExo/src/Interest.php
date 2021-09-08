<?php

class Interest{

    public function __construct(private string $name){
    }

    public function getName(){
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }
}
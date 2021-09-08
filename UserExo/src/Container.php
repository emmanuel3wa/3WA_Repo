<?php

class Container{

    public function __construct(private array $staorage = [])
    {
        
    }

    public function setStorage(Interest $interest, string $name){
        $this->staorage[$name] = $interest; 
    }

    public function getStorage(string $name){
        if (array_key_exists($name, $this->staorage))
            return $this->staorage[$name];
        return;
    }
}
<?php

class User{

    public function __construct(private array $interests = []){

    }

    public function setInterest(Interest $interest){
        $this->interests[] = $interest;
    }

    public function getInterests(){
        foreach ($this->interests as $interet){
            echo $interet->getName() . PHP_EOL;
        }
    }
}
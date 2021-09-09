<?php

class Form{
    public function __construct(private array $imputableList)
    {
        
    }

    public function showForm(){
        foreach($this->imputableList as $imput){
            if ($imput instanceof Imputable){
                $line = readline($imput->getName()." : ");
                $imput->setImputValue($line);
            }
        }
    }
}
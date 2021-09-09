<?php

class AgeImput implements Imputable{

    private string $value = "";

    public function getName(): string{
        return "Age";
    }
    public function setImputValue(string $value){
        $this->value = $value;
    }

    public function getImputValue(){
        return $this->value;
    }
}
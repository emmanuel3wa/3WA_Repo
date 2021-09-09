<?php

class FirstNameImput implements Imputable{

    private string $value = "";

    public function getName(): string{
        return "FirstName";
    }
    public function setImputValue(string $value){
        $this->value = $value;
    }

    public function getImputValue(){
        return $this->value;
    }
}
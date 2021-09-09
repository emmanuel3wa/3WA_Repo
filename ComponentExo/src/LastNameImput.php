<?php

class LastNameImput implements Imputable{

    private string $value = "";

    public function getName(): string{
        return "LastName";
    }
    public function setImputValue(string $value){
        $this->value = $value;
    }

    public function getImputValue(){
        return $this->value;
    }
}
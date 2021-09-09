<?php

class PassWordImput implements Imputable{

    private string $value = "";

    public function getName(): string{
        return "PassWord";
    }
    public function setImputValue(string $value){
        $this->value = $value;
    }

    public function getImputValue(){
        return $this->value;
    }
}
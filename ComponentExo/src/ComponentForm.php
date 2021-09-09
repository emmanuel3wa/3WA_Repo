<?php

class ComponentForm{

public function __construct(private array $imputable = []){
    
}


public function getForm(){
    return new Form($this->imputable);
}

public function addImput(Imputable $imput){
    $this->imputable[] = $imput; 
}

public function resetForm(){
    $this->imputable = [];
}
}
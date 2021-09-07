<?php

class Light{
    private bool $isOn = false;

    public function switchButton(){
        $this->isOn = !$this->isOn;
    }

    public function getState(){
        return $this->isOn;
    }

}
<?php

class Lamp{

    private Light $light;
    private bool $isLampButtonTurnOn = false;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function switchLight(){
        $this->isLampButtonTurnOn = !$this->isLampButtonTurnOn;
        $this->light->switchButton();
    }

    public function getButtonState(){
        return $this->isLampButtonTurnOn;
    }

    public function __toString()
    {
        $status = $this->light->getState() ? "allumée" : "éteinte";
        return "La lamp est : " . $status . PHP_EOL;
    }
}

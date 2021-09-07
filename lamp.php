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

    public function __toString()
    {
        $status = $this->light->getState() ? "allumée" : "éteinte";
        return "La lamp est : " . $status . PHP_EOL;
    }
}

class Light{
    private bool $isOn = false;

    public function switchButton(){
        $this->isOn = !$this->isOn;
    }

    public function getState(){
        return $this->isOn;
    }

}

$lamp = new Lamp(new Light);
echo $lamp . PHP_EOL;
$lamp->switchLight();
echo $lamp;
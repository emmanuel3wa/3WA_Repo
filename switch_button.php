<?php

class Lamp {
    public function __construct(
        private bool $is_On = false
        )
    {}

    public function switchLamp(){
        $this->is_On = !$this->is_On;
        if ($this->is_On)
            echo ("turn on" . PHP_EOL);
        else
            echo ("turn off". PHP_EOL);
    }
}


class Button {                   
    public function __construct(
        private Lamp $lamp
        )
    {}

    public function switchDevice(){
        $this->lamp->switchLamp();
    }
}

$lampbutton = new Button(new Lamp);
echo $lampbutton->switchDevice(); 
echo $lampbutton->switchDevice();
echo $lampbutton->switchDevice(); 
echo $lampbutton->switchDevice();

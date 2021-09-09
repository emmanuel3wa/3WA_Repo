<?php

class StorageSession implements Storable{

    public function __construct()
    {
        session_start();
    }

    public function setValue(string $name, float $price):void{
        $_SESSION[$name] = $price;
    }

    public function getValue(string $name): float{
        if (array_key_exists($name, $_SESSION))
            return $_SESSION[$name];
        return 0.;
    }

    public function reset():void{
        $this->storage = [];
    }
    public function total():float{
        $total = 0.;
        var_dump($_SESSION);
        foreach($_SESSION as $v){
            $total += $v;
        }

        return $total;
    }
    public function restore(string $name):void{
        if (isset($_SESSION[$name]))
            unset($_SESSION[$name]);
    }
}
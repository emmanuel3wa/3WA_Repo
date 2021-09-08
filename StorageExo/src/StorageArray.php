<?php

class StorageArray implements Storable{

    public function __construct(private array $storage = [])
    {
        
    }

    public function setValue(string $name, float $price):void{
        $this->storage[$name] = $price;
    }

    public function getValue(string $name): float{
        if (array_key_exists($name, $this->storage))
            return $this->storage[$name];
        return 0.;
    }

    public function reset():void{
        $this->storage = [];
    }
    public function total():float{
        $total = 0.;
        //var_dump($this->storage);
        foreach($this->storage as $v){
            $total += $v;
        }

        return $total;
    }
    public function restore(string $name):void{
        if (array_key_exists($name, $this->storage))
            unset ($this->storage[$name]); 
    }
}
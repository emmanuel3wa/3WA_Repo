<?php

class Cart{
    public function __construct(private Storable $storage, private float $tva = 1.2)
    {
        
    }

    public function buy(Productable $p, float $quantity){
      
        $total = ($quantity * ($p->getPrice() * $this->tva)) + $this->storage->getValue($p->getName());
        var_dump($total);
        $this->storage->setValue($p->getName(), $total);
    }

    public function restore(Productable $p):void{
        $this->storage->restore($p->getName());
    }

    public function total(){
        return $this->storage->total();
    }
}
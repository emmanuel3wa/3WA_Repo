<?php

class Cart {
    
    protected array $storage;

    public function total():float{
        $res = 0;
        foreach($this->storage as $p)
            $res += $p;

        return $res;
    }

    public function buy(Productable $p, $quantity){
        $this->storage[$p->getName()] = $p->getPrice() * $quantity;
    }

}
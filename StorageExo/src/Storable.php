<?php

interface Storable{
    public function setValue(string $name, float $price):void;
    public function getValue(string $name):float;
    public function reset():void;
    public function total():float;
    public function restore(string $name):void;
}
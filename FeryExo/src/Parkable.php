<?php namespace Park;

interface Parkable{
    public function pay(float $price);
    public function park(string $address, string $place);
}
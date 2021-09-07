<?php

class ShippingFeet extends Shipping{

    public function getCost(Order $order): float{
        return 100.;
    }
}
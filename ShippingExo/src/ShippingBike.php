<?php

class ShippingBike extends Shipping{

    public function getCost(Order $order): float{
        return 50.;
    }
}
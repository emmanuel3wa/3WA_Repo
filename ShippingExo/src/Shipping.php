<?php

abstract class Shipping{

    abstract public function getCost(Order $order) : float;
}

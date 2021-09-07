<?php

require_once __DIR__ . '/vendor/autoload.php';

// Livraison Bike
$order = new Order( new ShippingBike, 100 );

echo $order->cost();
echo "\n";

// Livraison Feet
$order = new Order( new ShippingFeet, 100 );

echo $order->cost();
echo "\n";
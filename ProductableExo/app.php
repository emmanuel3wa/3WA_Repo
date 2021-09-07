<?php

require_once __DIR__ . '/vendor/autoload.php';

$products = [
    new Book('Moby Dick', 30),
    new Music('AC/DC', 17.5),
    new Bike('Brompton', 1430),
];

$cart = new Cart;

foreach($products as $product)
    $cart->buy($product, 5);


var_dump($cart);
echo  $cart->total()  . "\n";
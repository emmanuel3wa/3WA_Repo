<?php

require_once __DIR__ . '/vendor/autoload.php';

$lamp = new Lamp(new Light);
echo $lamp . PHP_EOL;
$lamp->switchLight();
echo $lamp;
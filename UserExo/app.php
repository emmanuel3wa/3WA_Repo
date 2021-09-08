<?php

require_once __DIR__ . '/vendor/autoload.php';


$storage = [];
$alan = new User( $storage );

$python = new Interest('Python');
$alan->setInterest($python);

$php = new Interest('PHP');
$alan->setInterest($php);

$javascript = new Interest('Javascript');
$alan->setInterest($javascript);

echo "\n";
$alan->getInterests();
echo "\n";

$container = new Container();

$sql = new Interest('SQL');
$container->setStorage($sql, 'SQL');

$alan->setInterest($container->getStorage('SQL'));

$bigdata = new Interest('DATA');
$container->setStorage($bigdata, 'DATA');

$alan->setInterest($container->getStorage('DATA'));

var_dump($container->getStorage('DATA')); // retourne un intéret dans le container

echo "\n";
$alan->getInterests();
echo "\n";
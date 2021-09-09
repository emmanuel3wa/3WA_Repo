<?php

require_once __DIR__ . '/vendor/autoload.php';


$imputable = [
    new PassWordImput(),
    new FirstNameImput(),
    new AgeImput(),
    new LastNameImput()
];

$component = new ComponentForm($imputable);
$component->getForm()->showForm();
$component->resetForm();
$component->addImput(new FirstNameImput());
$component->getForm()->showForm();

<?php

class Letter{
    public function __construct(){    
    }

    public function generate(int $limite = 10): array{
        $carac = "abcdefghijklmnopqrstuvwxyz";
        $tab = [];
        for ($i=0; $i < $limite ; $i++) { 
            $tab[] = $carac[rand(0, 25)];
        }
        return $tab;
    }
}

class Console{
    public function __construct(){    
    }

    public function show(array $string){
        foreach($string as $letter){
            echo $letter;
        }
        echo PHP_EOL;
    }
}

$letter = new Letter();
$console = new Console();

$alphabet = $letter->generate(5);

$console->show($alphabet);
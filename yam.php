<?php


class Arbitrator{
    public function __construct(){

    }

    public function verifBrelan(array $dices) : bool{
        for ($i=0; $i < 5; $i++)
            for ($j= $i + 1; $j < 5 ; $j++)
                if ($dices[$i] === $dices[$j])
                    for ($k= $j + 1; $k < 5 ; $k++)
                        if ($dices[$k] === $dices[$j])
                            return true; 
        return false;
    }

    public function verifCarre(array $dices) : bool{
        for ($i=0; $i < 5; $i++)
            for ($j= $i + 1; $j < 5 ; $j++)
                if ($dices[$i] === $dices[$j])
                    for ($k= $j + 1; $k < 5 ; $k++)
                        if ($dices[$k] === $dices[$j])
                            for ($l= $k + 1; $l < 5 ; $l++)
                                if ($dices[$k] === $dices[$l])
                                    return true; 
        return false;
    }

    public function verifDouble(array $dices) : bool{
        for ($i=0; $i < 5; $i++)
            for ($j= $i + 1; $j < 5 ; $j++)
                if ($dices[$i] === $dices[$j])
               return true; 
        return false;
    }

    public function verifYam(array $dices) : bool{
        $verif = 0;
        for ($i=0; $i < 4; $i++) { 
            if ($dices[$i] != $dices[$i + 1])  
                $verif = 1;
        }
        if ($verif === 0)
            return true;
        return false;
    }
}

class Dice{

    public function __construct(private int $faceUp = 1)
    {
    }

    public function rollTheDice(){
        $this->faceUp = rand(1,6);
    }

    public function shwoTheDice() : int{
        return $this->faceUp;
    }
}

class Yam{
    private array $dices;
    private array $combinaison = [];
    private int $nbBrelan;
    private int $nbDouble;
    private int $nbCarre;
    private int $nbYam;
    public function __construct(
        private Arbitrator $arbiter
    )
    {
        for ($i=0; $i < 5; $i++) { 
            $this->dices[] = new Dice;
            $this->combinaison[] = 1;
        }
    }

    private function verifCombinaison(){
        foreach($this->dices as $key => $dice){
            $this->combinaison[$key] = $dice->shwoTheDice();
            echo($this->combinaison[$key]);
        }
        echo PHP_EOL;

        if ($this->arbiter->verifYam($this->combinaison))
            $this->nbYam++;
        else if($this->arbiter->verifCarre($this->combinaison))
            $this->nbCarre++;
        else if ($this->arbiter->verifBrelan($this->combinaison))
            $this->nbBrelan++;
        else if ($this->arbiter->verifDouble($this->combinaison))
            $this->nbDouble++; 
    }

    private function resetGame(){
        $this->nbBrelan = 0;
        $this->nbDouble = 0;
        $this->nbCarre = 0;
        $this->nbYam = 0;
    }

    private function printGame(int $limite){
        echo("nb de Brelan en ".$limite." lancés est de ". $this->nbBrelan .  PHP_EOL);
        echo("nb de Carré en ".$limite." lancés est de ". $this->nbCarre .  PHP_EOL);
        echo("nb de Double en ".$limite." lancés est de ". $this->nbDouble .  PHP_EOL);
        echo("nb de Yam en ".$limite." lancés est de ". $this->nbYam .  PHP_EOL);
    }
    
    public function game(int $limite = 10){

        $this->resetGame();

        for ($i=0; $i < $limite; $i++) {
            foreach ($this->dices as $dice)
                $dice->rollTheDice();
            $this->verifCombinaison();
        }
    
        $this->printGame($limite);
    }
}

$game = new Yam(new Arbitrator);
$game->game(5);

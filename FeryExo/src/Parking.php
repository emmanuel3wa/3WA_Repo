<?php namespace Park;

class Parking
{
    private array $parkables;
    private int $countPark = 0;

    public function count(): int{
        return $this->countPark;
    }

    public function addPark(Parkable $parkable){
        $this->parkables[] = $parkable;
        $this->countPark = $this->countPark + 1;
    }

    public function removePark(Parkable $parkable){
        if (($key = array_search($parkable, $this->parkables)) !== false) {
            unset($this->parkables[$key]);
        }
    }

    public function __toString() {
       return PHP_EOL ."Il y a {$this->countPark} vehicule(s) dans ce parking" . PHP_EOL;
    }

    public function getAll(){
        foreach($this->parkables as $mobile)
            echo PHP_EOL ."Il y a un(e) {$mobile->getName()} allant a {$mobile::getSpeed()} km/h ". PHP_EOL;
    }
}
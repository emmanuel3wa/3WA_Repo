<?php namespace Park;

class Ferry extends Vehicule
{

    private Parking $parking;

    public function __construct(Parking $parking)
    {
        $this->parking = $parking;
    }
    
}
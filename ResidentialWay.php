<?php

require_once 'Highway.php';

final class ResidentialWay extends Highway
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle){
        $this->currentVehicles[] = $vehicle;
        return 'Your ' . $vehicle . ' drive now on the ResidentialWay !';
    }
}
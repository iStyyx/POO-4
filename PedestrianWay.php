<?php

require_once 'Highway.php';

final class PedestrianWay extends Highway
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle){
        if($vehicle instanceof Bicycle){
            $this->currentVehicles[] = $vehicle;
            return 'Your ' . $vehicle . ' drive now on the PedestrianWay !';
        }
        return 'It\s forbidden on this way';
    }
}
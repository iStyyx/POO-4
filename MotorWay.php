<?php

require_once 'Highway.php';

final class MotorWay extends Highway
{

    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle){
        if($vehicle instanceof Car){
            $this->currentVehicles[] = $vehicle;
            return 'Your car drive now on the MotorWay !';
        }
        return 'It\'s forbidden on this way';
    }
}
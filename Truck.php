<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    // PROPERTIES
    private int $storage;

    private int $loading = 0;

    private int $loadingMax = 1000;

    private string $energy;


    // METHODS
    public function __construct(int $storage, string $color, int $nbSeats, string $energy){
        $this->storage = $storage;
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }


    // GETTERS & SETTERS
    public function getStorage(): int
    {
        return $this->storage;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if(in_array($energy, Car::ALLOWED_ENERGIES))
        {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }

    public function getLoadingMax(): int
    {
        return $this->loadingMax;
    }

    public function filledOrNot(){
        if($this->loading === $this->loadingMax){
            return ' is full';
        } elseif($this->loading > 0 && $this->loading < $this->loadingMax)
        {
            return ' is not totally full';
        } else {
            return ' is empty';
        }
    }
}
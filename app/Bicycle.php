<?php
namespace App;

class Bicycle extends TransportAbstract{

    function __construct()
    {
        $this->nameTransport = "Bicycle";
        $this->passengersMaximum = 0;
        $this->baggageWeightMaximum = 10;
        $this->fuelConsumption100km = 0;
        $this->travelDistanceMaximum = 100;
        $this->vehicleDepreciationRate = 1;
        $this->fuelCost = 0;
    }
}
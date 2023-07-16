<?php
namespace App;

class Truck extends TransportAbstract{

    function __construct()
    {
        $this->nameTransport = "Truck";
        $this->passengersMaximum = 0;
        $this->baggageWeightMaximum = 3000;
        $this->fuelConsumption100km = 20;
        $this->travelDistanceMaximum = 100;
        $this->vehicleDepreciationRate = 2;
        $this->fuelCost = 45;
    }
}
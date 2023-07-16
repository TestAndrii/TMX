<?php
namespace App;

abstract class TransportAbstract implements TransportInterface
{
    protected string $nameTransport = 'Bus';
    protected int $passengersMaximum = 32;
    protected int $baggageWeightMaximum  = 300;
    protected int $fuelConsumption100km = 20;
    protected int $travelDistanceMaximum = 200;
    protected int $vehicleDepreciationRate = 2;
    protected int $fuelCost = 45;

    function __construct(
        string $nameTransport,
        int $passengersMaximum, int $baggageWeightMaximum,
        int $fuelConsumption100km, int $travelDistanceMaximum,
        int $vehicleDepreciationRate,
        int $fuelCost)
    {
        $this->nameTransport = $nameTransport;
        $this->passengersMaximum = $passengersMaximum;
        $this->baggageWeightMaximum = $baggageWeightMaximum;
        $this->fuelConsumption100km = $fuelConsumption100km;
        $this->travelDistanceMaximum = $travelDistanceMaximum;
        $this->vehicleDepreciationRate = $vehicleDepreciationRate;
        $this->fuelCost = $fuelCost;
    }

    public function costTransfer(int $passengers, int $massaBaggage, int $travelDistance): float
    {
        // test input date
        if($passengers > $this->passengersMaximum) {
            return 0; // error
        }
        if($massaBaggage > $this->baggageWeightMaximum) {
            return 0; // error
        }
        if($travelDistance > $this->travelDistanceMaximum) {
            return 0; // error
        }

        return $this->salaryDriver($travelDistance, 1, 5) + $this->fuelCostTravel($travelDistance) * $this->vehicleDepreciationRate;
    }

    public function salaryDriver(int $distance, int $driverCategory, int $perKilometerRate): float
    {
        return $distance * $driverCategory * $perKilometerRate;
    } 


    // Fuel
    public function fuelCostTravel(int $travelDistance): float
    {
        return ($travelDistance / 100) * $this->fuelConsumption100km * $this->fuelCost;
    }
    public function getFuelCost(): int
    {
        return $this->fuelCost;
    }
    public function setFuelCost(int $fuelCost): int
    {
        $this->fuelCost = $fuelCost;
        return $this->fuelCost;
    }

    // Vehicle Depreciation Rate
    public function getVehicleDepreciationRate(): int
    {
        return $this->vehicleDepreciationRate;
    }
    public function setVehicleDepreciationRate(int $vehicleDepreciationRate): int
    {
        $this->vehicleDepreciationRate = $vehicleDepreciationRate;
        return $this->vehicleDepreciationRate;
    }
}
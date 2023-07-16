<?php
 
require __DIR__ . '/vendor/autoload.php';

use App\Bicycle;
use App\Bus;
use App\Truck;

// Bus
$bus = new Bus("Bus",20,100,10,200,3,50);
$bus->setFuelCost(61);
$bus->setVehicleDepreciationRate(5);

// Truck
$truck = new Truck();
$truck->setFuelCost(52);

// Bicycle
$bicycle = new Bicycle();

// print
printf("Bus: %01.2f\n",$bus->costTransfer(10,100,100,1));
printf("Track: %01.2f\n",$truck->costTransfer(0,3000,50));
printf("Bicycle: %01.2f\n",$bicycle->costTransfer(0,10,10));
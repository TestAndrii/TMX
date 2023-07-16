<?php
 
require __DIR__ . '/vendor/autoload.php';

use App\Bicycle;
use Carbon\Carbon;
use App\Bus;
use App\Truck;

$bus = new Bus("Bus",20,100,10,200,3,50);
$truck = new Truck();
$bicycle = new Bicycle();

printf("Bus: %s\n",$bus->costTransfer(10,100,100,1));
printf("Track: %s\n",$truck->costTransfer(0,3000,50));
printf("Bicycle: %s\n",$bicycle->costTransfer(0,10,10));
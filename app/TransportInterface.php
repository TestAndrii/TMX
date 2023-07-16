<?php
namespace App;

interface TransportInterface { 

    /**
     * costTransfer - Стоимость поездки.
     *
     * @param  mixed $passengers - количество пасажиров 
     * @param  mixed $massaBaggage - вес багажа
     * @param  mixed $travelDistance - длинна маршрута
     * @param  mixed $vehicleDepreciationRate - коэфициент амортизации транспортного средства
     * @param  mixed $fuelCost - Стоимость топлива
     * @return float
     */
    public function costTransfer(int $passengers, int $massaBaggage, int $travelDistance): float;

        
    /**
     * salaryDriver - ЗП водителя
     *
     * @param  mixed $distance
     * @param  mixed $driverCategory
     * @param  mixed $perKilometerRate
     * @return float
     */
    public function salaryDriver(int $distance, int $driverCategory, int $perKilometerRate,): float;
 
     
    /**
     * fuelCostTravel - стоимость топлива
     *
     * @param  mixed $travelDistance
     * @return float
     */
    public function fuelCostTravel(int $travelDistance): float;

}
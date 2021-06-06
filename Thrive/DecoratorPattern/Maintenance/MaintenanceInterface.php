<?php namespace Thrive\DecoratorPattern\Maintenance;

use Thrive\DecoratorPattern\Vehicle\VehicleInterface;


interface MaintenanceInterface 
{
    public function doWork(VehicleInterface $vehicle);
}
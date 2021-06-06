<?php namespace Thrive\DecoratorPattern\Maintenance;

use Thrive\DecoratorPattern\Maintenance\MaintenanceInterface;
use Thrive\DecoratorPattern\Service\ServiceLineItem;
use Thrive\DecoratorPattern\Vehicle\VehicleInterface;


abstract class Maintenance implements MaintenanceInterface 
{
    protected $maintenance_name;

    public function __construct($name = 'Maintenance')
    {
        $this->maintenance_name = $name;
    }

    abstract public function doWork(VehicleInterface $vehicle) : ServiceLineItem;

}
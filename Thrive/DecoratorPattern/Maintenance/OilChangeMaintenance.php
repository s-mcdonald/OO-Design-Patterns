<?php namespace Thrive\DecoratorPattern\Maintenance;

use Thrive\DecoratorPattern\Maintenance\Maintenance;
use Thrive\DecoratorPattern\Maintenance\MaintenanceInterface;
use Thrive\DecoratorPattern\Service\ServiceLineItem;
use Thrive\DecoratorPattern\Vehicle\VehicleInterface;


class OilChangeMaintenance extends Maintenance implements MaintenanceInterface 
{
    public function __construct()
    {
        parent::__construct('Oil Change');
    }

    public function doWork(VehicleInterface $vehicle) : ServiceLineItem
    {
        $parts = 75;
        $labor = 15;

        switch(strtolower($vehicle->getMake()))
        {
            case 'saab':
                $parts = 90;
                $labor = 20;
                break;
            case 'toyota':
                $labor = 15;
                break;
            default:
                break;
        }

        return new ServiceLineItem(' --Oil Change', $parts , $labor);
    }

}
<?php namespace Thrive\DecoratorPattern\Maintenance;

use Thrive\DecoratorPattern\Maintenance\Maintenance;
use Thrive\DecoratorPattern\Maintenance\MaintenanceInterface;
use Thrive\DecoratorPattern\Service\ServiceLineItem;
use Thrive\DecoratorPattern\Vehicle\VehicleInterface;


class ReplaceBrakeFluidMaintenance extends Maintenance implements MaintenanceInterface 
{
    public function __construct()
    {
        parent::__construct('Change Brake Fluid');
    }

    public function doWork(VehicleInterface $vehicle) : ServiceLineItem
    {
        $parts = 45;
        $labor = 45;

        switch(strtolower($vehicle->getMake()))
        {
            case 'saab':
                $parts = 55;
                break;
            case 'toyota':
                $labor = 35;
                break;
            default:
                break;
        }

        return new ServiceLineItem(' --Brake Fluid', $parts , $labor);
    }

}
<?php namespace Thrive\DecoratorPattern\Maintenance;

use Thrive\DecoratorPattern\Maintenance\Maintenance;
use Thrive\DecoratorPattern\Maintenance\MaintenanceInterface;
use Thrive\DecoratorPattern\Service\ServiceLineItem;
use Thrive\DecoratorPattern\Vehicle\VehicleInterface;


class AirFilterMaintenance extends Maintenance implements MaintenanceInterface 
{
    public function __construct()
    {
        parent::__construct('Air Filter');
    }

    public function doWork(VehicleInterface $vehicle) : ServiceLineItem
    {
        $parts = 15;
        $labor = 15;

        switch($vehicle->getMake())
        {
            case 'saab':
                $parts = 20;
                break;
            default:
                break;
        }

        return new ServiceLineItem(' --Air Filter', $parts , $labor);

    }

}
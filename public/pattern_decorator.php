<?php

require __DIR__.'/../Thrive/autoload.php';

use Thrive\DecoratorPattern\Maintenance\AirFilterMaintenance;
use Thrive\DecoratorPattern\Maintenance\OilChangeMaintenance;
use Thrive\DecoratorPattern\Maintenance\ReplaceBrakeFluidMaintenance;
use Thrive\DecoratorPattern\Service\Service;
use Thrive\DecoratorPattern\Vehicle\Saab;
use Thrive\DecoratorPattern\Vehicle\Toyota;


$saab = new Saab('93', 2007);
$toyota = new Toyota('Camry', 2021);

// App Service Container
$service = new Service($toyota);

// Either in the AppContainer of Decorator Manager
// register the Decorators
$service->addMaintenance(new OilChangeMaintenance());
$service->addMaintenance(new AirFilterMaintenance());
$service->addMaintenance(new ReplaceBrakeFluidMaintenance());

// When ready, exucute the decorator
$service->workOnVehicle();

// Display the report to User
echo $service->printReport();



<?php namespace Thrive\DecoratorPattern\Vehicle;

use Thrive\DecoratorPattern\Vehicle\Vehicle;
use Thrive\DecoratorPattern\Vehicle\VehicleInterface;

class Saab extends Vehicle implements VehicleInterface
{
    public function __construct($model, $year)
    {
        parent::__construct('Saab', $model, $year);
    }  
    
}
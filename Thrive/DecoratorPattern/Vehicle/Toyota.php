<?php namespace Thrive\DecoratorPattern\Vehicle;

use Thrive\DecoratorPattern\Vehicle\Vehicle;
use Thrive\DecoratorPattern\Vehicle\VehicleInterface;

class Toyota extends Vehicle implements VehicleInterface
{
    public function __construct($model, $year)
    {
        parent::__construct('Toyota', $model, $year);
    }  
         
}
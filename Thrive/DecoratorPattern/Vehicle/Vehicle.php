<?php namespace Thrive\DecoratorPattern\Vehicle;

use Thrive\DecoratorPattern\Vehicle\VehicleInterface;

abstract class Vehicle implements VehicleInterface
{
    protected   $make           = '';
    protected   $model          = '';
    protected   $year           = '';
    public      $report         = [];
    public      $serviceCost    = 0;
    
  

    public function __construct($make, $model, $year)
    {
        $this->make      = $make;
        $this->model     = $model;
        $this->year      = $year;
        $this->serviceCost = 0;
    }

    public function getMake()
    {
        return $this->make;
    }

    public function getModel()
    {
        return $this->model;
    }
    
    public function getYear()
    {
        return $this->year;
    } 
        
}
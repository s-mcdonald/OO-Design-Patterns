<?php namespace Thrive\FactoryPattern\Car;

use Thrive\FactoryPattern\Interfaces\CarInterface;


abstract class Car implements CarInterface
{

    protected $model;
    protected $year;


    public function __construct($model = '', $year)
    {
        $this->model = $model;
        $this->year = $year;
    }  

    public function turnEngineOn()
    {
        return true;
    }

    public function steer()
    {
        return true;
    }


    public function getModelName()
    {
        return $this->model;
    }

    public function getModelYear()
    {
        return $this->year;
    } 
    
}
<?php namespace Thrive\FactoryPattern\Car;

use Thrive\FactoryPattern\Car\Car;
use Thrive\FactoryPattern\Interfaces\CarInterface;


class CarVolvo extends Car implements CarInterface
{

    protected $model;

    public $has_sunroof;


    public function __construct($model = '', $year)
    {
        parent::__construct($model,$year);

        $this->has_sunroof = ($model == 's40') && ($year == 2018);
    }  
    
}
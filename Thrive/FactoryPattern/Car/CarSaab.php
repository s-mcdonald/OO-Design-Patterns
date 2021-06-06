<?php namespace Thrive\FactoryPattern\Car;

use Thrive\FactoryPattern\Car\Car;
use Thrive\FactoryPattern\Interfaces\CarInterface;
use Thrive\FactoryPattern\Interfaces\SafetyRatingInterface;


class CarSaab extends Car implements CarInterface, SafetyRatingInterface
{

    protected $model;
    protected $year;
    protected $safety_rating;


    public function __construct($model = '', $year = 2021)
    {
        parent::__construct($model, $year);

        $this->safety_rating = 5;
    }  

    public function score() : int
    {
        return $this->safety_rating;
    }
    
}
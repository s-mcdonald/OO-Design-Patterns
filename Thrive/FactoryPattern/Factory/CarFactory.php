<?php namespace Thrive\FactoryPattern\Factory;

use Exception;
use Thrive\FactoryPattern\Interfaces\CarInterface;


class CarFactory
{

    public static function Build(string $car, string $model = '', $year = 2021) : CarInterface
    {
  
        if(empty($car)) {
            throw new \Exception('No Specific car type specified.');
        }

        $class_name = 'Thrive\FactoryPattern\Car\Car' . ucfirst($car);

        if(class_exists($class_name))
        {
            return new $class_name($model,$year);
        }
        
        throw new \Exception("The car `{$car}`  does not exist yet");
   
    }
    
}
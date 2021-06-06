<?php

use Thrive\FactoryPattern\Factory\CarFactory;

require __DIR__.'/../Thrive/autoload.php';


$volvo = CarFactory::Build('Volvo');
$saab = CarFactory::Build('Saab');

try 
{
    $jeep = CarFactory::Build('Jeep');
}
catch(\Exception $e)
{
    echo $e->getMessage();
}

echo '<pre>';
var_dump($volvo);
var_dump($saab);
var_dump($jeep);




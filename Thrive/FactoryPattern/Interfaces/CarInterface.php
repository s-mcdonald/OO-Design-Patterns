<?php namespace Thrive\FactoryPattern\Interfaces;


interface CarInterface
{

    public function turnEngineOn();

    public function steer();
    
    
    public function getModelName();


    public function getModelYear();
}
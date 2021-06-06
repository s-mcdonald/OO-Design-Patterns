<?php namespace Thrive\FactoryPattern\Interfaces;

use Thrive\FactoryPattern\Interfaces\CarInterface;


class CarFactoryInterface
{
    public static function Build(string $model) : CarInterface;
}
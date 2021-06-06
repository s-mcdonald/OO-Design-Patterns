<?php namespace Thrive\DecoratorPattern\Service;

use Thrive\DecoratorPattern\Maintenance\MaintenanceInterface;
use Thrive\DecoratorPattern\Vehicle\VehicleInterface;


class ServiceLineItem
{
    protected $line_labor;
    protected $line_parts;
    protected $line_title;



    public function __construct($title = '', $labor, $parts)
    {
        $this->line_labor       = $labor;
        $this->line_parts       = $parts;
        $this->line_title       = $title;
    }

    public function getLaborCosts()
    {
        return $this->line_labor;
    }

    public function getPartsCosts()
    {
        return $this->line_parts;
    }

    public function getLineTitle()
    {
        return $this->line_title;
    }    

}
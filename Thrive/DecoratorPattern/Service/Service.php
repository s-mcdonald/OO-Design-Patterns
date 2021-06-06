<?php namespace Thrive\DecoratorPattern\Service;

use Thrive\DecoratorPattern\Maintenance\MaintenanceInterface;
use Thrive\DecoratorPattern\Service\ServiceLineItem;
use Thrive\DecoratorPattern\Vehicle\VehicleInterface;


class Service
{

    // List of items to maintain
    protected $maintenance;
    protected $vehicle;
    protected $report;

    protected $labor_cost;
    protected $parts_cost;
    protected $total_cost;

    public function __construct(VehicleInterface $vehicle)
    {
        $this->maintenance = [];
        $this->vehicle = $vehicle;

        $this->report    = [];
       
        $this->labor_cost = 0;
        $this->parts_cost = 0;
        $this->total_cost = 0;
    }

    public function addMaintenance(MaintenanceInterface $maintenance)
    {
        $this->maintenance[] = $maintenance;
    }

    public function workOnVehicle()
    {
        foreach($this->maintenance as $job)
        {
            $serviceItem = $job->doWork($this->vehicle);

            $this->reportOnJob($serviceItem);
           
        }
    }

    protected function reportOnJob(ServiceLineItem $serviceItem)
    {
        $this->report[] = "{$serviceItem->getLineTitle()} for {$this->vehicle->getMake()} {$this->vehicle->getModel()} :";
        $this->report[] = "   Labor : {$serviceItem->getLaborCosts()}";
        $this->report[] = "   Parts : {$serviceItem->getPartsCosts()}";
        $this->labor_cost += $serviceItem->getLaborCosts();
        $this->parts_cost += $serviceItem->getPartsCosts();
        $this->total_cost += $serviceItem->getLaborCosts() + $serviceItem->getPartsCosts();
    }

    public function printReport()
    {
        $str = '<pre>';
        
        foreach($this->report as $line)
        {
            $str .=  $line . '<br>';
        }

        $str .= $this->getTotals();

        $str .= '<pre>';

        return $str;

    }  

    public function getTotals()
    {
        $str = '-----------------------------<br>';
        $str .= 'Labor Costs:  ' .$this->labor_cost . '<br>';  
        $str .= 'Parts Costs:  ' .$this->parts_cost . '<br>';  
        $str .= '-----------------------------<br>';
        $str .= 'Total Costs:  ' .$this->total_cost . '<br>';        
        $str .= '=============================<br>';

        return $str;
    }

}
<?php

namespace App\OOP;


abstract class Car
{
    protected int $speed;
    protected int $numberOfDoors;
    protected string $gearBoxSystem;
    protected string $color;
    protected bool $turnOn = false;
    private CarDashboard $dashboard;
    public function __construct(int $speed, int $numberOfDoors, string $gearBoxSystem, string $color,bool $turnOn)
    {
        $this->speed         = $speed;
        $this->numberOfDoors = $numberOfDoors;
        $this->gearBoxSystem = $gearBoxSystem;
        $this->color         = $color;
        $this->turnOn        = $turnOn;
    }

    public abstract function move() : int;
    public abstract function turnOn() : bool;
    public abstract function turnOff() : bool;
    public abstract function accelerate(int $speed) : bool;
    public abstract function park() : bool;

    public function installDashboard(CarDashboard $dashboard){
        $this->dashboard = $dashboard;
    }
    public function carInfo() : string{
         if($this->dashboard){
             return "The speed is {$this->speed}\n more info ... \n {$this->dashboard->readDashboard()}";
         }
         return "The Speed is {$this->speed}\n";
    }
}
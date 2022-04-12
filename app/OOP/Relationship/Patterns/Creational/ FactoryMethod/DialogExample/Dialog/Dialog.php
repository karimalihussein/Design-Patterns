<?php


namespace App\OOP\Relationship\Patterns\Creational\FactoryMethod\DialogExample\Dialog;
use App\OOP\Relationship\Patterns\Creational\FactoryMethod\DialogExample\Buttons\Button;
abstract class Dialog
{
    abstract public function createButton(): Button;
    
}
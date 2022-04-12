<?php


namespace App\OOP\Relationship\Patterns\Creational\FactoryMethod\DialogExample\Dialog;

use App\OOP\Relationship\Patterns\Creational\FactoryMethod\DialogExample\Buttons\Button;

class  SystemDialog extends Dialog
{
    public function createButton(): Button
    {

        return new systemButton();
        
    }
}

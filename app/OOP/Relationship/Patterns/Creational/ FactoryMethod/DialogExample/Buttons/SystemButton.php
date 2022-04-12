<?php

namespace App\OOP\Relationship\Patterns\Creational\FactoryMethod\DialogExample\Buttons;


class SystemButton extends Button
{
    public function show() : string
    {
        return 'System Button';
    }

    public function click() : void
    {
        echo 'System Button clicked';
    }
} 

<?php

namespace App\OOP\Relationship\Patterns\Creational\FactoryMethod\DialogExample\Buttons;


class UIButton extends Button
{
    public function show() : string
    {
      return '<UIButton props="{UIButton}"></UIButton>';
    }

    public function click() : void
    {
        echo 'UI Button clicked';
    }
} 

<?php

namespace App\OOP\Relationship\Patterns\Creational\FactoryMethod\DialogExample\Buttons;


class WebButton extends Button
{
    public function show() : string
    {
        return '<div>
            <button type="button" class="btn btn-primary">Web Button</button>
        </div>';
    }

    public function click() : void
    {
        echo 'Web Button clicked';
    }
} 

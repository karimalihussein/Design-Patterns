<?php

declare(strict_types = 1);


require_once __DIR__ . '/../vendor/autoload.php';


use App\OOP\Relationship\Patterns\Creational\Builder\Builders\ComputerCSBuilder;
use App\OOP\Relationship\Patterns\Creational\Builder\Builders\ComputerXLBuilder;
use App\OOP\Relationship\Patterns\Creational\Builder\Director;


$director = new Director(new ComputerCSBuilder());
$computer = $director->makeComputer();
var_dump($computer);
$director = new Director(new ComputerXLBuilder());
$computer = $director->makeComputer();
var_dump($computer);





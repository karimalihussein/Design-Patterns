<?php

declare(strict_types = 1);


require_once __DIR__ . '/../vendor/autoload.php';
// this is aggregation type of Relationship
// use App\OOP\Relationship\Aggregation\Project;
// use App\OOP\Relationship\Aggregation\Devoloper;

// $karim = new Devoloper('karim');
// $ahmed = new Devoloper('ahmed');
// $ali   = new Devoloper('ali');

// $project = new Project('Project 1', new \DateTime('2020-01-01'), [$karim, $ahmed, $ali]);
// $project->setDeadLine(new \DateInterval('P1M'));

// var_dump($project->showProjectInformation());

// unset($project);

// var_dump($karim->getName());
// var_dump($project);
//! this is aggregation type of Relationship

use App\OOP\Relationship\Composition\Room;
use App\OOP\Relationship\Composition\House;
use App\OOP\Relationship\Composition\CPU;
use App\OOP\Relationship\Composition\RAM;
use App\OOP\Relationship\Composition\ComputerMachine;


$house = new House([
    new Room('red', 10),
    new Room('blue', 20),
    new Room('green', 30),
]);

// var_dump($house);

$computerMachine = new ComputerMachine(
    new CPU(2.5),
    new RAM(8)
);

// inheritance is-a

// Manager is-A Employee

// Aggreation Has-A

// Project Has-A Devoloper

// Composition part of 

// room part-of House
// CPU part-of ComputerMachine






<?php

namespace App\OOP\Relationship\Aggregation;

class Project 
{
    private string $name;
    private \DateTime $deadLine;


    private array $devolopers;


    public function __construct(string $name, \DateTime $deadLine, array $devolopers)
    {
        $this->name = $name;
        $this->deadLine = $deadLine;
        $this->devolopers = $devolopers;
    }

    public function setDeadLine(\DateInterval $interval)
    {
        $this->deadLine->add($interval);
    }

    public function showProjectInformation() : string 
    {
        $devolopers = implode(', ', array_map(function (Devoloper $devoloper) {
            return $devoloper->getName();
        }, $this->devolopers));
        return "
           
            Project Name: {$this->name} <br/>
            Project DeadLine: {$this->deadLine->format('Y-m-d')} <br/>
            Project Devolopers: {$devolopers} <br/>
            
        ";
    }
  

}
<?php


namespace App\OOp\Relationship\Patterns\Creational\Builder\Computer\Types;

use App\OOp\Relationship\Patterns\Creational\Builder\Computer\CoolingSystem;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\Types\Computer as TypesComputer;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\Types\Computer;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\Types\Computer\ICoolingSystem;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\Types\Computer\IPower;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\UPS;

class ComputerXL extends Computer implements ICoolingSystem, IPower
{
  private CoolingSystem $cs;
  private UPS $ups;
 
  public function turnOn(): bool
  {
      return true;
  }

  public function turnOff(): bool
  {
      return true;
  }

  public function CoolDown(int $temp): bool
  {
      return true;
  }

  public function backUpPower(): bool
  {
      return true;
  }

  public function setCoolingSystem(CoolingSystem $cs): void
  {
      $this->cs = $cs;
  }
  

  public function setUPS(UPS $ups): void
  {
      $this->ups = $ups;
  }

  public function getUPS(): UPS
  {
      return $this->ups;
  }





}
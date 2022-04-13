<?php


namespace App\OOp\Relationship\Patterns\Creational\Builder\Computer\Types\Computer;

use App\OOp\Relationship\Patterns\Creational\Builder\Computer\CoolingSystem;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\Types\Computer;

class ComputerCS extends Computer implements ICoolingSystem
{
  private CoolingSystem $cs;

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

   public function setCs(CoolingSystem $cs): void
   {
         $this->cs = $cs;
   }

   public function getCs(CoolingSystem $cs): CoolingSystem
   {
       return  $this->cs = $cs;
   }
 
  

}
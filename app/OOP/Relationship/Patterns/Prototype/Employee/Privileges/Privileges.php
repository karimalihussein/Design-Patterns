<?php


namespace App\OOP\Relationship\Patterns\Prototype\Employee\Privileges;

use App\OOP\Relationship\Patterns\Prototype\Employee\Privileges\Types\TypeInterface;

class Privileges
{
     private array $privileges;


     public function __construct(array $privileges)
     {
          $this->privileges = $privileges;
     }

     public function addPrivilege(TypeInterface $privilege): void
     {
          $this->privileges[] = $privilege;
     }

     public function clearPrivilege(): void
     {
          $this->privileges = [];
     }

}
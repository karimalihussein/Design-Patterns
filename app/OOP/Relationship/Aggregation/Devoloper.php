<?php

namespace App\OOP\Relationship\Aggregation;

class Devoloper 
{
   
      private string $name;

      public function __construct(string $name)
      {
          $this->name = $name;
      }

      public function getName(): string
      {
          return $this->name;
      }
}
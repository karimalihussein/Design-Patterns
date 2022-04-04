<?php

namespace App\OOp;

class Microwave
{
     private int $temp;
     private string $program;
     private int $time;
     public bool $status = false;


     public function __construct(int $temp, string $program, int $time)
     {
          $this->temp       = $temp;
          $this->program    = $program;
          $this->time       = $time;
     }

     public function turnOn(): bool
     {
          $this->status = true;
          return true;
     }

        public function turnOff(): bool
        {
            $this->status = false;
            return true;
        }

     public function deFreeze(): string{
         $this->turnOnMicrowaveHeatingSystem();
         $this->loadingDeFreezingProgram();
         $this->setTimer();
         return "i am De-freezing the food at {$this->temp} degrees useing {$this->program} for {$this->time} seconds";
     }

     private function turnOnMicrowaveHeatingSystem(){
         return "starting on Heating System";
     }
     
     private function loadingDeFreezingProgram(){
            return "loading program {$this->program}";
     }

     private function setTimer(){
            return "setting timer for {$this->time} seconds";
     }
}
<?php

namespace App\OOP;

class Salary {
    protected float $salary;
    protected float $tax;
    protected int $absent;
    protected int $overTime;
    protected int $overTimeRate;
    protected int $absenceRate;



    public function __construct(float $salary, float $tax, int $absent, int $overTime, int $overTimeRate, int $absenceRate){
                    $this->salary        = $salary;
                    $this->tax           = $tax;
                    $this->absent        = $absent;
                    $this->overTime      = $overTime;
                    $this->overTimeRate  = $overTimeRate;
                    $this->absenceRate   = $absenceRate;

    }

    public function calculateSalary() : float{
       return $this->salary - ($this->salary  * $this->tax); 

    }


  
}
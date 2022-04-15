<?php


namespace App\OOP\Relationship\Patterns\Prototype\Employee;

class Salary
{
    private float $salary;
    private float $tax;
    private float $medicalInsurance;
    private float $bonus;


    public function __construct(
        float $salary,
        float $tax,
        float $medicalInsurance,
        float $bonus
    ) {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->medicalInsurance = $medicalInsurance;
        $this->bonus = $bonus;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function getTax(): float
    {
        return $this->tax;
    }

    public function getMedicalInsurance(): float
    {
        return $this->medicalInsurance;
    }

    public function getBonus(): float
    {
        return $this->bonus;
    }

    public function getTotalSalary(): float
    {
        return ($this->salary + $this->medicalInsurance + $this->bonus) - $this->tax;
    }

    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    public function setTax(float $tax): void
    {
        $this->tax = $tax;
    }

    public function setMedicalInsurance(float $medicalInsurance): void
    {
        $this->medicalInsurance = $medicalInsurance;
    }

    public function setBonus(float $bonus): void
    {
        $this->bonus = $bonus;
    }









    
}
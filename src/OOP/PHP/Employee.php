<?php

namespace App\OOP\PHP;
class Employee
{
    private string $name;
    private int $age;
    private int  $salary;

    /**
     * Employee constructor.
     * @param string $name
     * @param int $age
     * @param int $salary
     */
    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return int
     */
    public function getSalary()
    {
        return $this->salary;
    }


}
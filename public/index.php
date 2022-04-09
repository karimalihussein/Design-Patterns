<?php

declare(strict_types = 1);


require_once __DIR__ . '/../vendor/autoload.php';

use App\OOP\Employee;
use App\OOP\Salary;

$ahmed = new Employee(
    'ahmed ali',
    30,
    new Salary(
      5000,
      0.2,
      2,
      30,
      75,
      20
    )
);

var_dump($ahmed->getSalary()->calculateSalary());
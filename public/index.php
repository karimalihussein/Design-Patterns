<?php

declare(strict_types = 1);


require_once __DIR__ . '/../vendor/autoload.php';

use App\OOP\Employee;
use App\OOP\Microwave;
$employee = new Employee('John', 25, 1000);

$microwave = new Microwave(300, 'Cookies', 10);
// $microwave->turnOn();
if($microwave->turnOn()){
    echo $microwave->status;
    var_dump($microwave->deFreeze());
}
if(!$microwave->turnOff()){
    echo $microwave->status;
    var_dump($microwave->deFreeze());
}
// karim ali hussein

// this is main branch

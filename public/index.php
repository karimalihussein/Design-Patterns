<?php

declare(strict_types = 1);


require_once __DIR__ . '/../vendor/autoload.php';

use App\OOP\Relationship\Patterns\Prototype\Employee\Address;
use App\OOP\Relationship\Patterns\Prototype\Employee\Privileges\Privileges;
use App\OOP\Relationship\Patterns\Prototype\Employee\Privileges\Types\ServerRoomPrivilege;
use App\OOP\Relationship\Patterns\Prototype\Employee\Privileges\Types\WebProjectPrivilege;
use App\OOP\Relationship\Patterns\Prototype\Employee\ProfileData;
use App\OOP\Relationship\Patterns\Prototype\Employee\EmployeePrototype;
use App\OOP\Relationship\Patterns\Prototype\Employee\Privileges\Types\NetworkPrivilege;
use App\OOP\Relationship\Patterns\Prototype\Employee\Salary;

// $karim = new EmployeePrototype('Karim', 2500);
// var_dump($karim);

// $ahmed = clone $karim;

// var_dump($ahmed);


$karim = new EmployeePrototype(
                new ProfileData('karim ali hussein', 22, 
                new Address(
                        51.292929,
                        57.292929,
                        'Al-Nahar Al-Kharj',
                        'Cairo',
                        'Egypt',
                        10,
                        20904
                ),
                '+201010101010',
                '+203949494949',
                'karimalihussein'
            ),
                new Salary(2500,0.25,300,0.25), 
                new Privileges(
                    [
                        new WebProjectPrivilege(),
                        new ServerRoomPrivilege(),
                    ]
                )


                );
// var_dump($karim);
$karim->getPrivileges()->addPrivilege(new NetworkPrivilege());
var_dump($karim);

$ahmed = clone $karim;
var_dump($ahmed);







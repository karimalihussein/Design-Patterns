<?php


namespace App\OOP\Relationship\Patterns\Prototype\Employee;

use App\OOP\Relationship\Patterns\Prototype\Employee\Privileges\Privileges;
use App\OOP\Relationship\Patterns\Prototype\Employee\Privileges\Types\ServerRoomPrivilege;
use App\OOP\Relationship\Patterns\Prototype\Employee\Privileges\Types\WebProjectPrivilege;


class EmployeePrototype implements Prototype
{
    private ProfileData $profileData;
    private salary $salary;
    private Privileges $privileges;


    public function __construct(
        ProfileData $profileData,
        salary $salary,
        Privileges $privileges
    ) {
        $this->profileData = $profileData;
        $this->salary      = $salary;
        $this->privileges  = $privileges;
    }


    public function getProfileData(): ProfileData
    {
        return $this->profileData;
    }

    public function getSalary(): salary
    {
        return $this->salary;
    }

    public function getPrivileges(): Privileges
    {
        return $this->privileges;
    }
    


    public function __clone()
    {
       $this->privileges->clearPrivilege();
       $this->privileges->addPrivilege(new WebProjectPrivilege());
       $this->privileges->addPrivilege(new ServerRoomPrivilege());
       $this->salary->setTax(0.1);
       $this->salary->setSalary(1500);
       $this->medicalInsurance = $this->salary->getSalary() * 0.3;
       $this->profileData->setAddress(null);
       $this->profileData->setName('Employee Name');
       $this->profileData->setAge(25);
       $this->profileData->setMobileNumber('01200902377');
       $this->profileData->setTelephone('06400902377');
       $this->profileData->setSlackAccountName('Slack.account');
       
    }
    // private string $name;
    // private float $salary;

    // public function __construct(string $name, float $salary)
    // {
    //     $this->name = $name;
    //     $this->salary = $salary;
    // }


    // public function __clone()
    // {
    //     $this->name   = 'Employee Name';
    //     $this->salary = 1500;
    //     return $this;
    // }
}
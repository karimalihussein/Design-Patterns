<?php

namespace App\OOP\Relationship;

use App\OOP\Relationship\Printer\Printer;

abstract class Teacher{

    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function sayWelcome(Printer $printer): string
    {
        $printer->setStringToBePrinted($this->name);
       return $printer->printToScreen();
    }

    abstract public function assignAHomeWork(): string;

    public function evaluateStudentHomeWork(Student $student): string
    {
        if($student->getHomeWorkScore() >= 50) {
            return "Success";
        }
        return "Failed";
    }

}
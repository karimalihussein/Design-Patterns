<?php

namespace App\OOP\Relationship\Printer;

class PlainTextPrinter extends Printer

{
    public function printToScreen() : string
    {
        return "<h1>this is a plain text format of the string: {$this->stringToBePrinted}</h1>";
    }
}
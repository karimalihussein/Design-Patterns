<?php

namespace App\OOP\Relationship\Printer;

class HTMLPrinter extends Printer

{
    public function printToScreen() : string
    {
        return "<h1>this is a HTML format of the string: {$this->stringToBePrinted}</h1>";
    }
}
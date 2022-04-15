<?php

namespace App\OOP\Relationship\Patterns\Prototype\Employee\Privileges\Types;

use App\OOP\Relationship\Patterns\Prototype\Employee\Privileges\Types\TypeInterface;

class WebProjectPrivilege implements TypeInterface
{
    public function enable(): bool
    {
        return true;
    }

    public function disable(): bool
    {
        return false;
    }
}
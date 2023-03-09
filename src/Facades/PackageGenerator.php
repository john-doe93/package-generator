<?php

namespace JrAhmet\PackageGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class PackageGenerator extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'package-generator';
    }
}

<?php

namespace Rmirandasv\Shadlar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rmirandasv\Shadlar\Shadlar
 */
class Shadlar extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Rmirandasv\Shadlar\Shadlar::class;
    }
}

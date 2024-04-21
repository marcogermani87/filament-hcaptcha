<?php

namespace MarcoGermani87\FilamentHcaptcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MarcoGermani87\FilamentHcaptcha\Skeleton
 */
class FilamentHcaptcha extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MarcoGermani87\FilamentHcaptcha\FilamentHcaptcha::class;
    }
}

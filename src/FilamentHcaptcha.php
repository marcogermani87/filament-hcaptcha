<?php

namespace MarcoGermani87\FilamentHcaptcha;

use Filament\Panel;

class FilamentHcaptcha
{
    public function getId(): string
    {
        return FilamentHcaptchaServiceProvider::$name;
    }

    public function register(Panel $panel): void
    {

    }

    public function boot(Panel $panel): void
    {

    }

    public static function make(): static
    {
        return app(static::class);
    }
}

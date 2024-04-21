<?php

namespace MarcoGermani87\FilamentHcaptcha\Forms\Components;

use Filament\Forms\Components\Field;

class Captcha extends Field
{
    protected string $view = 'filament-hcaptcha::form.components.captcha';

    public static function make(string $name): static
    {
        $static = app(static::class, ['name' => $name]);
        $static->configure()
            ->rules('required|HCaptcha')
//            ->dehydrated(false)
            ->label('');

        return $static;
    }
}

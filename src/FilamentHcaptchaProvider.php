<?php

namespace MarcoGermani87\FilamentHcaptcha;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SkeletonServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-hcaptcha';
    
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-hcaptcha')
            ->hasConfigFile('filament-hcaptcha')
            ->hasTranslations()
            ->hasViews();
    }
}

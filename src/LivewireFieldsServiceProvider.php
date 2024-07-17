<?php

namespace RobinThijsen\LivewireFields;

use RobinThijsen\LivewireFields\Views\Fields\Input;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LivewireFieldsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name('livewire-fields')
            ->hasConfigFile()
            ->hasViewComponents('fields', Input::class);
    }
}

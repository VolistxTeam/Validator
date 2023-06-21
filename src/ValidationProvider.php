<?php

namespace Volistx\Validation;

use Illuminate\Support\ServiceProvider;

class ValidationProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->loadJsonTranslationsFrom(__DIR__ . '/../lang');

        $this->publishes([
            __DIR__ . '/../lang' => resource_path('lang/vendor/validator'),
        ]);
    }
}

<?php

namespace Volistx\Validation;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class ValidationProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        if ($this->app->runningInConsole()) {
            $this->registerResources();
        }

        if ($this->isLumen() === false) {
            $this->mergeConfigFrom(__DIR__.'/../config/volistx-validation.php', 'volistx-validation');
        }

        $this->loadJsonTranslationsFrom(__DIR__ . '/../lang');

        $this->publishes([
            __DIR__ . '/../lang' => resource_path('lang/vendor/validator'),
        ]);
    }

    public function registerResources()
    {
        if ($this->isLumen() === false) {
            $this->publishes([
                __DIR__.'/../config/volistx-validation.php' => config_path('volistx-validation.php'),
            ], 'config');
        }
    }

    protected function isLumen()
    {
        return Str::contains($this->app->version(), 'Lumen') === true;
    }
}

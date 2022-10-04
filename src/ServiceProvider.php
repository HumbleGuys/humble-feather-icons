<?php

namespace HumbleFeatherIcons;

use Illuminate\Support\ServiceProvider as SupportServiceProvider;

class ServiceProvider extends SupportServiceProvider
{
    public function register(): void
    {
        $this->loadViewsFrom(__DIR__.'/resources', 'featherIcons');
    }

    public function boot(): void
    {
    }
}

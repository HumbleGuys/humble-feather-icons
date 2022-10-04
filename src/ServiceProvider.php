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
        /*
        collect(app('files')->files(__DIR__.'/resources/icons'))->each(function ($file) {
            $new = __DIR__.'/resources/components/'.str($file->getFilename())->beforeLast('.').'.blade.php';

            if (! file_exists($new)) {
                copy($file->getRealPath(), $new);
            }
        });
        */
    }
}

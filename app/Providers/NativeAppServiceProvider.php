<?php

namespace App\Providers;


use Native\Laravel\Facades\MenuBar;

class NativeAppServiceProvider
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        MenuBar::create();
    }
}

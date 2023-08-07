<?php

namespace App\Providers;

use Native\Laravel\Facades\Window;
use Native\Laravel\GlobalShortcut;
use Native\Laravel\Menu\Menu;

class NativeAppServiceProvider
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        Menu::new()
            ->appMenu()
            ->submenu(
                'About',
                Menu::new()
                    ->link('https://beyondco.de', 'Beyond Code')
                    ->link('https://simonhamp.me', 'Simon Hamp')
            )
            ->submenu(
                'View',
                Menu::new()
                    ->toggleFullscreen()
                    ->separator()
                    ->link('https://laravel.com', 'Learn More', 'CmdOrCtrl+L')
            )
            ->register();

        Window::open()
            ->width(800)
            ->height(800);
    }
}

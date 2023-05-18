<?php

namespace TURBOTECH\Component;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views/panels', 'panels');
        $this->loadViewsFrom(__DIR__.'/views/element', 'elements');

        /* Main Card */ 
        Blade::component('panels::main-card', 'main-card');
        Blade::component('panels::title', 'card:title');

        /* Element Button */ 
        Blade::component('elements::button', 'button');
        
    }

}

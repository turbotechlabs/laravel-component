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
        Blade::component('elements::button-primary', 'button:primary');
        Blade::component('elements::button-secondary', 'button:secondary');
        Blade::component('elements::button-warning', 'button:warning');
        Blade::component('elements::button-danger', 'button:danger');
        Blade::component('elements::button-success', 'button:success');
        
    }

}

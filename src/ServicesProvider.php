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
        $this->loadViewsFrom(__DIR__.'/views/element/buttons', 'buttons');
        $this->loadViewsFrom(__DIR__.'/views/format/output', 'output');

        /* Main Card */ 
        Blade::component('panels::main-card', 'main-card');
        Blade::component('panels::title', 'card:title');

        /* Element Button */ 
        Blade::component('buttons::button', 'button');
        Blade::component('buttons::button-primary', 'button:primary');
        Blade::component('buttons::button-secondary', 'button:secondary');
        Blade::component('buttons::button-warning', 'button:warning');
        Blade::component('buttons::button-danger', 'button:danger');
        Blade::component('buttons::button-success', 'button:success');

        /* Format Phone View */ 
        Blade::component('output::phone-number', 'view:phone');
        
    }

}

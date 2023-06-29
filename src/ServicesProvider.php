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
        $this->loadViewsFrom(__DIR__.'/views/format/input', 'input');
        $this->loadViewsFrom(__DIR__.'/views/format/output', 'output');
        $this->loadViewsFrom(__DIR__.'/views/display', 'displays');
        $this->loadViewsFrom(__DIR__.'/views/search', 'search');

        /* Main Card */ 
        Blade::component('panels::main-card', 'main-card');
        Blade::component('panels::inner-card', 'card-inner');
        Blade::component('panels::title', 'card:title');

        /* Element Button */ 
        Blade::component('buttons::button', 'button');
        Blade::component('buttons::button-primary', 'button:primary');
        Blade::component('buttons::button-secondary', 'button:secondary');
        Blade::component('buttons::button-warning', 'button:warning');
        Blade::component('buttons::button-danger', 'button:danger');
        Blade::component('buttons::button-success', 'button:success');

        /* Format Phone Input */ 
        Blade::component('input::phone-number', 'input:phone');
        Blade::component('input::name-en', 'input:name:en');
        Blade::component('input::name-kh', 'input:name:kh');
        Blade::component('input::url', 'input:url');
        Blade::component('input::url-camel', 'input:url-camel');
        Blade::component('input::email', 'input:mail');

        /* Format Phone View */ 
        Blade::component('output::phone-number', 'view:phone');

        /* Display */ 
        Blade::component('displays::list-loading', 'table:loading');
        Blade::component('displays::list', 'table');
        Blade::component('displays::datatable', 'datatable');

        /* Search SEO */ 
        Blade::component('search::seo', 'seo');
        
    }

}

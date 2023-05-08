@php
    /*
    |--------------------------------------------------------------------------
    |@name          : <x-card:title>
    |@description   : main Card panel
    |@sources       : https://gitlab.com/turbotech-lab/laravel-component
    |@version       : 1.0.0
    |
    |--------------------------------------------------------------------------
    |@auth 🛠
    |   -> name     : Leat Sophat :(https://github.com/pphatDev)
    |   -> role     : Developer
    |   -> email    : info.sophat@gmail.com
    |
    |--------------------------------------------------------------------------
    |@param  ✨
    |   -> color     : color class name "text-red-400"
    |
    |--------------------------------------------------------------------------
    |@example ✨
    |   
    |   <x-card:title color="text-red-500">
    |        <div>
    |            Content Here
    |        </div>
    |    </x-card:title>
    
    */
@endphp

@props([
    "color" => 'text-primary',
])

<h1 class="font-medium font-roboto {{ $color }}">
    {{ $slot }}
</h1>

@php
    /*
    |--------------------------------------------------------------------------
    |@name          : <x-main-card>
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
    |   -> grid     : number value [1-12]
    |
    |--------------------------------------------------------------------------
    |@example ✨
    |   
    |   <x-main-card grid="1">
    |        <div>
    |            Content Here
    |        </div>
    |    </x-main-card>
    
    */
@endphp

@props([
    "grid" => 1,
])

@php
    $cols = 'grid-cols-1';
    switch ($grid) {
        case '1':
            $cols = 'grid-cols-1';
            break;

        case '2':
            $cols = 'grid-cols-2';
            break;

        case '3':
            $cols = 'grid-cols-3';
            break;

        case '4':
            $cols = 'grid-cols-4';
            break;

        case '5':
            $cols = 'grid-cols-5';
            break;

        case '6':
            $cols = 'grid-cols-6';
            break;

        case '7':
            $cols = 'grid-cols-7';
            break;

        case '8':
            $cols = 'grid-cols-8';
            break;

        case '9':
            $cols = 'grid-cols-9';
            break;

        case '10':
            $cols = 'grid-cols-10';
            break;

        case '11':
            $cols = 'grid-cols-11';
            break;

        case '12':
            $cols = 'grid-cols-12';
            break;
        
        default:
            $cols = 'grid-cols-1';
            break;
    }
@endphp


<div class="w-full mx-auto px-2 sm:px-5">
    <div class="grid gap-5 sm:mt-5 {{ $cols ?? '' }}">
        <div class="bg-white dark:bg-gray-800 col-span-1 rounded shadow-md p-5">
            {{ $slot }}
        </div>
    </div>
</div>
@php
    /*
    |--------------------------------------------------------------------------
    |@name          : <x-card:title>
    |@description   : main Card panel
    |@sources       : https://github.com/turbotechlabs/laravel-component
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

@props(["class" => '',])

@php
    $phone  = $slot;
    $ac     = substr($phone, 0, 3);
    $prefix = substr($phone, 3, 3);
    $suffix = substr($phone, 6);
@endphp


<phone-number class="font-roboto {{ $class }}">{{  $ac.' '.$prefix.' '.$suffix }}</phone-number>
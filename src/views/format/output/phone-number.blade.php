@php
    /*
    |--------------------------------------------------------------------------
    |@name          : <x-view:phone>
    |@description   : Format Phone Number
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
    |   -> class     : tailwindcss class
    |
    |--------------------------------------------------------------------------
    |@example ✨
    |   
    |   <x-view:phone class="text-red-500">
    |        0000000000
    |    </x-view:phone>
    */
@endphp

@props(["class" => '',])

@php
    $phone  = str_replace(' ', '', str_replace('-', '', $slot));
    $ac     = substr($phone, 0, 3);
    $prefix = substr($phone, 3, 3);
    $suffix = substr($phone, 6);
@endphp

<phone-number class="font-roboto {{ $class }}">{{  $ac.' '.$prefix.' '.$suffix }}</phone-number>
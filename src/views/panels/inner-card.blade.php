@php
    /*
    |--------------------------------------------------------------------------
    |@name          : <x-main:inner>
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
    |   -> grid     : number value [1-12]
    |
    |--------------------------------------------------------------------------
    |@example ✨
    |   
    |   <x-main:inner>
    |        <div>
    |            Content Here
    |        </div>
    |    </x-main:inner>
    
    */
@endphp


<div class="col-span-1 p-3 bg-white rounded shadow-md sm:p-5 dark:bg-gray-800">
    {{ $slot }}
</div>
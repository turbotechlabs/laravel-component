@php
    /*
    |--------------------------------------------------------------------------
    |@name          : <x-button:warning>
    |@description   : Button warning 
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
    |   -> type     : html types
    |   -> class    : option classes
    |   -> size    : font-size
    |   -> onclick  : option functions
    |   -> onmouseover  : option functions
    |
    |--------------------------------------------------------------------------
    |@example ✨
    |   
    |   <x-button:warning
    |       type="button" 
    |       onclick="alert('Hello')" 
    |       ripple> Cancel 
    |   </x-button:warning>
    */
@endphp


@props([
    'type' => 'button',
    'ripple' => '',
    'onclick' => '',
    'onmouseover' => '',
    'size' => 'text-sm', 
])

@php
    $effect = "";
    if ($ripple != '' && $ripple != null) {
        $effect = "waves-effect";
    }
@endphp

<button 
    type="{{ $type }}" 

    @if ($onclick != "" && $onclick != null)
        onclick="{{ $onclick }}"
    @endif
    @if ($onmouseover != "" && $onmouseover != null)
        onmouseover="{{ $onmouseover }}"
    @endif

    @if ($attributes)
        {{ $attributes->merge(['class'=>'py-1.5 text-sm font-poppins !w-auto px-3 rounded-md transition-all leading-5 select-none cursor-pointer focus:bg-warning-600 hover:bg-warning-600 bg-warning-500 dark:bg-warning-900 text-white '.$size.' '.$effect]) }}
    @endif >
    {{ $slot }}
</button>
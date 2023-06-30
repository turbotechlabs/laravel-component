@php
    /*
    |--------------------------------------------------------------------------
    |@name          : <x-button>
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
    |   -> type     : html types
    |   -> class    : option classes
    |   -> size    : font-size
    |   -> onclick  : option functions
    |   -> onmouseover  : option functions
    |
    |--------------------------------------------------------------------------
    |@example ✨
    |   
    |   <x-button 
    |       type="button" 
    |       class="text-white bg-red-500" 
    |       onclick="alert('Hello')" 
    |       ripple> Cancel 
    |   </x-button>
    */
@endphp

@props([
    'type' => 'button',
    'ripple' => '',
    'class' => 'text-gray-500',
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

    @if ($attributes)
        {{ $attributes->merge(['class'=>'py-1.5 w-auto px-3 rounded-md transition-all leading-5 select-none cursor-pointer '.$size.' '.$class.' '.$effect]) }}
    @endif

    @if ($onmouseover != "" && $onmouseover != null)
        onmouseover="{{ $onmouseover }}"
    @endif>
    {{ $slot }}
</button>
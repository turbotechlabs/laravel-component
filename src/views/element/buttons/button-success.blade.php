@php
    /*
    |--------------------------------------------------------------------------
    |@name          : <x-button:success>
    |@description   : Button success 
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
    |   <x-button:success
    |       type="button" 
    |       onclick="alert('Hello')" 
    |       ripple> Cancel 
    |   </x-button:success>
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
    @if ($attributes)
        {{ $attributes }}
    @endif
    @if ($onmouseover != "" && $onmouseover != null)
        onmouseover="{{ $onmouseover }}"
    @endif

    @if ($attributes)
        {{ $attributes->merge(['class'=>'py-1.5 text-sm font-poppins !w-auto px-3 rounded-md transition-all leading-5 select-none cursor-pointer focus:bg-success-600 hover:bg-success-600 bg-success-500 dark:bg-success-900 text-white '.$size.' '.$effect]) }}
    @endif >
    {{ $slot }}
</button>
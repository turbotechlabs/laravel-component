@php
    /*
    |--------------------------------------------------------------------------
    |@name          : <x-button:primary>
    |@description   : Button Primary 
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
    |   <x-button:primary
    |       type="button" 
    |       onclick="alert('Hello')" 
    |       ripple> Cancel 
    |   </x-button:primary>
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
    
    class="py-1.5 !w-auto px-3 rounded-md transition-all leading-5 select-none cursor-pointer {{ $size }} {{ $effect }} focus:bg-primary-600 hover:bg-primary-600 bg-primary-500 dark:bg-primary-900 text-white">
    {{ $slot }}
</button>
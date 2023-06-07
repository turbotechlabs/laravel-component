@php
    /*
    |--------------------------------------------------------------------------
    |   @name          : <x-input:url>
    |   @description   : URL Input
    |   @sources       : https://github.com/turbotechlabs/laravel-component
    |   @version       : 1.0.0
    |
    |--------------------------------------------------------------------------
    |   @auth 🛠
    |   -> name     : Leat Sophat :(https://github.com/pphatDev)
    |   -> role     : Developer
    |   -> email    : info.sophat@gmail.com
    |
    |--------------------------------------------------------------------------
    |   @param  ✨
    |   -> placeholder  : placeholder format
    |   -> value        : update case
    |   -> id           : id tag
    |   -> name         : name tag
    |   -> mx           : maximum value
    |
    |--------------------------------------------------------------------------
    |   @example ✨
    |   
    |   <x-input:url
    |       id="url" 
    |       name="url" 
    |       value="URL Name"
    |   />
    |
    */
@endphp

@props([
    "placeholder"   => 'URL Name',
    "value"         => '',
    "id"            => '_undefine_id',
    "name"          => '_undefine_name',
    "max"           => '50',
])


<input
    type="text"
    id="{{ $id }}"
    name="{{ $name }}"
    placeholder="{{ $placeholder }}"
    @if ($value != "")
        value="{{  $value }}" 
    @else
        value="" 
    @endif
    @if ($attributes)
        {{ $attributes->merge(['class'=>'py-1.5 sm:col-span-2 focus:outline-none px-3 block w-full sm:text-sm bg-white dark:text-white border rounded-md dark:bg-gray-800 focus:border-primary-500 disabled:bg-slate-100 read-only:bg-slate-100']) }}
    @endif
    onkeypress="return new TextValidation().urlCharater(event)"
    max="{{ $max }}"
>
@php
    /*
    |--------------------------------------------------------------------------
    |   @name          : <x-input:phone>
    |   @description   : Format Phone Number
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
    |
    |--------------------------------------------------------------------------
    |   @example ✨
    |   
    |   <x-input:phone 
    |       id="phone" 
    |       name="phone" 
    |       value="012345678"
    |   />
    |
    */
@endphp

@props([
    "placeholder"   => '000 000 0000',
    "value"         => '',
    "id"            => '_undefine_id',
    "name"          => '_undefine_name',
])

@php
    $phone  = str_replace(' ', '', str_replace('-', '', $value));
    $ac     = substr($phone, 0, 3);
    $prefix = substr($phone, 3, 3);
    $suffix = substr($phone, 6);
@endphp

<input
    type="text"
    id="{{ $id }}"
    name="{{ $name }}"
    placeholder="{{ $placeholder }}"
    @if ($value != "")
        value="{{  $ac.' '.$prefix.' '.$suffix }}" 
    @else
        value="" 
    @endif
    @if ($attributes)
        {{ $attributes->merge(['class'=>'py-1.5 sm:col-span-2 focus:outline-none px-3 block w-full sm:text-sm bg-white dark:text-white border rounded-md dark:bg-gray-800 focus:border-primary-500 disabled:bg-slate-100 read-only:bg-slate-100']) }}
    @endif
    onchange="return new TextValidation().validationPhone(event)"
    onkeypress="return new TextValidation().phone(event)"
>

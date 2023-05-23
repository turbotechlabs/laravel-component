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
    class="py-1.5 sm:col-span-2 focus:outline-none px-3 block w-full sm:text-sm bg-white dark:text-white border rounded-md dark:bg-gray-800 focus:border-primary-500 disabled:bg-slate-100 read-only:bg-slate-100"
    onchange="validationNumber(this.id)"
    onkeypress="return validENNumber(event) && formatPhoneNum(this.id)" 
>


<script>
    const debounce = (callback) => {
        let timeoutId;
        clearTimeout(timeoutId)
        timeoutId = setTimeout( () => callback(), 300);
    }

    window.validationNumber = (id) => {
        debounce(
            ()=> { validateLength(id) }
        )
    }
</script>
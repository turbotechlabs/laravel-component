


@props(['type' => 'button'])


<button 
    type="{{ $type }}" 
    class="px-3 py-1 shadow-xl rounded-xl bg-primary-500 shadow-primary-500">
    {{ $slot }} {{-- Default Dynamic Param --}}
</button>
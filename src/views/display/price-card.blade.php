<div class="relative p-5 bg-white transition-all hover:ring-2 ring-sky-500 rounded-xl {{ $attributes['active'] ? 'ring-4' : '' }}">
    <img class="absolute top-0 left-0 right-0 w-full -z-[1]" src="{{ asset('images/bg@3.svg') }}" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
    <div class="">
        @isset($attributes)
            <h1 class="font-semibold font-poppins">{{ $attributes['title'] ?: '' }}</h1>
            <p class="py-3 font-poppins text-slate-500">{{ $attributes['description'] ?: '' }}</p>
            
            <h1 class="text-4xl font-bold text-center font-poppins">$<span class="pricing">{{ $attributes['price'] ?: '' }}</span><span class="text-sm font-normal planned-type">/Year</span> </h1>
            <button onclick="new Helper().goto('{{ $attributes['url'] ?: '' }}')" type="button" class="w-full px-4 py-2 mt-5 text-sm font-semibold text-white waves-effect bg-slate-50 bg-primary-500 rounded-2xl font-poppins">Buy plan →</button>

            @isset($attributes['feature'])
                <ul>
                    @foreach ($attributes['feature'] as $item)
                        <li class="flex items-center gap-3 pt-1 text-slate-500">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="flex-shrink-0 w-3 h-3 text-primary-500">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-xs leading-7 font-poppins"> {{ $item ?: '' }} </span>
                        </li>
                    @endforeach
                </ul>
            @endisset
            {{-- @isset($attributes['icon'])
                <img class="object-cover w-12 h-12 shadow-lg shadow-slate-100 rounded-xl" src="{{ $attributes['icon'] ?: '' }}" alt="{{ $attributes['title'] ?: '' }}">
            @endisset
            <h1 class="py-2 text-lg font-semibold">{{ $attributes['title'] ?: '' }}</h1>
            <p class="text-sm font-poppins text-slate-600 line-clamp-3">{{ $attributes['description'] ?: '' }}</p> --}}
        @endisset
    </div>
</div>
<div class="relative p-5 overflow-hidden transition-all bg-white hover:ring-2 ring-sky-500 rounded-xl waves-effect">
    <img class="absolute inset-0 -z-[1] w-full bg-opacity-50" src="{{ asset('images/bg@3.svg') }}" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
    <div class="">
        @isset($attributes)
            @isset($attributes['icon'])
                <img class="object-cover w-12 h-12 shadow-lg shadow-slate-100 rounded-xl" src="{{ $attributes['icon'] ?: '' }}" alt="{{ $attributes['title'] ?: '' }}">
            @endisset
            <h1 class="py-2 text-lg font-semibold">{{ $attributes['title'] ?: '' }}</h1>
            <p class="text-sm font-poppins text-slate-600 line-clamp-3">{{ $attributes['description'] ?: '' }}</p>
        @endisset
        <button onclick="new Helper().goto('{{ $attributes['url'] ?: '' }}')" type="button" class="text-sm py-1.5 bg-slate-50 bg-primary-500 px-4 my-3 rounded-2xl font-semibold text-white font-poppins">Learn more →</button>
    </div>
</div>
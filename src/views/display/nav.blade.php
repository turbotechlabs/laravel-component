<header class="w-full bg-white drop-shadow-lg">
    @isset($attributes['data'])
        @php
            $layout     = isset($attributes['data']->layout) ? $attributes['data']->layout : "container";
            $justify    = isset($attributes['data']->justify) ? $attributes['data']->justify : "right";
            
            switch ($layout) {
                case 'full':
                    $_width = "";
                break;
                default:
                    $_width = "max-w-[100rem]";
                break;
            }
            
            switch ($justify) {
                case 'left':
                    $_justify = "justify-start";
                break;
                case 'center':
                    $_justify = "justify-center";
                break;
                default:
                    $_justify = "justify-end";
                break;
            }
        @endphp
                
        <nav class="flex items-center {{ $_width }} justify-between w-full gap-5 px-3 lg:px-5 py-2 mx-auto">
            <div>
                @isset($attributes['data']->logo)
                    @php $logo = (object)$attributes['data']->logo @endphp
                    <a href="{{ isset($logo->route) ? $logo->route : "/" }}">
                        <img class="object-cover w-16 transition-all sm:w-24 lg:w-32" src="{{ $logo->image ?: "" }}" alt="">
                    </a>
                @endisset
            </div>
            
            @isset($attributes['data']->menu)
                <ul class="{{ $_justify }} hidden w-full gap-2 font-medium lg:flex font-poppins">
                    @foreach ($attributes['data']->menu as $item)
                        @php 
                            $item = (object)$item; 
                        @endphp
                        @isset($item->name)
                            <li>
                                @if (isset($item->route) && !isset($item->item))
                                    <x-button onclick="new Helper().goto('{{ $item->route ?: '' }}')" class="text-base font-medium bg-white/50 backdrop-blur-sm hover:bg-slate-100 hover:text-primary-500" data-dropdown-toggle="dropdown-{{ $item->id ?: '' }}" ripple data-dropdown-placement="bottom-start"> 
                                        {{ $item->name ?: "" }}
                                    </x-button>
                                @else
                                    <x-button class="text-base font-medium bg-white/50 backdrop-blur-sm hover:bg-slate-100 hover:text-primary-500" data-dropdown-toggle="dropdown-{{ $item->id ?: '' }}" ripple data-dropdown-placement="bottom-start"> 
                                        {{ $item->name ?: "" }}
                                    </x-button>
                                @endif
                                
                                @isset($item->item)
                                    <div id="dropdown-{{ $item->id ?: '' }}" class="absolute right-0 z-50 hidden w-[15rem] text-sm font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-md text-slate-900 ring-1 ring-slate-900/5 focus:outline-none">
                                        <div class="py-1.5 font-poppins text-sm">
                                            @foreach ($item->item as $subitem)
                                                @php $subitem = (object)$subitem; @endphp
                                                
                                                <a href="{{ isset($subitem->route) ? $subitem->route : '' }}" class="block px-3.5 py-1.5 hover:bg-slate-100">
                                                    @isset($subitem->icon) <i class="nil {{ $subitem->icon ?: "" }} w-4"></i> @endisset
                                                    <span class="font-poppins">{{ $subitem->name ?: "" }}</span>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                @endisset
                            </li>
                        @endisset
                    @endforeach
                </ul>
            @endisset


            @isset($attributes['data']->actions)
                <div>
                    <div class="flex-shrink-0 hidden gap-2 lg:flex">
                        @foreach ($attributes['data']->actions as $item)
                            @php 
                                $item = (object)$item; 
                            @endphp
                            @isset($item->name)
                                @if ($item->type != "solid")
                                    <button class="px-3 py-1 text-sm font-normal rounded-full text-sky-500 ring-1 ring-sky-500 font-poppins">{{ $item->name ?: "" }}</button>
                                @else
                                    <button class="px-3 py-1 text-sm font-normal text-white rounded-full ring-1 ring-sky-500 bg-sky-500 font-poppins">{{ $item->name ?: "" }}</button>
                                @endif
                            @endisset
                        @endforeach
                    </div>

                    <div class="lg:hidden">
                        <x-button class="text-base font-medium !rounded-full bg-white/50 backdrop-blur-sm hover:bg-slate-100 hover:text-primary-500" data-dropdown-toggle="dropdown" ripple data-dropdown-placement="bottom-start"> 
                            <i class="nir #ellipsis-v text-lg w-4"></i>
                        </x-button>

                        <div id="dropdown" class="absolute right-0 z-50 hidden w-[16rem] text-sm font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-md text-slate-900 ring-1 ring-slate-900/5 focus:outline-none">
                            <div class="py-1.5 font-poppins text-sm">
                                
                                @isset($attributes['data']->menu)
                                    @foreach ($attributes['data']->menu as $item)
                                        @php $item = (object)$item; @endphp
                                        @isset($item->name)
                                            <a href="{{ isset($item->route) ? $item->route : "" }}" class="block px-3.5 py-1.5 hover:bg-slate-100">
                                                <span class="font-poppins">{{ $item->name ?: "" }}</span>
                                            </a>
                                        @endisset
                                    @endforeach
                                @endisset

                                <div class="flex justify-end gap-3 px-5 pt-5 pb-4">
                                    @foreach ($attributes['data']->actions as $item)
                                        @php $item = (object)$item; @endphp
                                        @isset($item->name)
                                            @if ($item->type != "solid")
                                                <button class="w-full px-3 py-1 text-sm font-normal rounded-full text-sky-500 ring-1 ring-sky-500 font-poppins">{{ $item->name ?: "" }}</button>
                                            @else
                                                <button class="w-full px-3 py-1 text-sm font-normal text-white rounded-full ring-1 ring-sky-500 bg-sky-500 font-poppins">{{ $item->name ?: "" }}</button>
                                            @endif
                                        @endisset
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endisset
        </nav>
    @endisset
</header>
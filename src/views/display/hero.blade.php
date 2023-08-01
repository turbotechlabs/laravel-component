<div class="relative overflow-hidden">
    <div class="pt-16 pb-80 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
        <div class="relative px-4 mx-auto sm:static sm:px-6 lg:px-8">
            <div class="sm:max-w-xl">
                <h1 class="text-4xl font-bold leading-[3rem] text-gray-900 sm:text-6xl">{{ $attributes['title'] ?: '' }}</h1>
                <p class="py-5 mt-4 text-sm text-gray-500 sm:text-xl font-poppins">{{ $attributes['description'] ?: '' }}</p>
            </div>
            <div class="mt-10">
                <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 -z-[1] lg:mx-auto lg:w-full">
                    <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-1 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                        <div class="flex items-center space-x-6 lg:space-x-8">
                            <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                <div class="w-64 h-64 overflow-hidden rounded-xl sm:opacity-0 lg:opacity-100">
                                    <img src="https://www.turbotech.com/storages/assets/img/services/internet_home1.jpg" alt="" class="object-cover object-center w-full h-full">
                                </div>
                                <div class="w-64 h-64 overflow-hidden rounded-xl">
                                    <img src="https://www.turbotech.com/storages/assets/img/services/business1.jpg" alt="" class="object-cover object-center w-full h-full">
                                </div>
                            </div>
                            <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                <div class="w-64 h-64 overflow-hidden rounded-xl">
                                    <img src="https://www.turbotech.com/storages/assets/img/services/enterprise1.jpg" alt="" class="object-cover object-center w-full h-full">
                                </div>
                                <div class="w-64 h-64 overflow-hidden rounded-xl">
                                    <img src="https://www.turbotech.com/storages/assets/img/services/turbo-speed.png" alt="" class="object-cover object-center w-full h-full">
                                </div>
                                <div class="w-64 h-64 overflow-hidden rounded-xl">
                                    <img src="https://www.turbotech.com/storages/assets/img/services/extrem1_g.jpg" alt="" class="object-cover object-center w-full h-full">
                                </div>
                            </div>
                            <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                <div class="w-64 h-64 overflow-hidden rounded-xl">
                                    <img src="https://www.turbotech.com/storages/assets/img/services/china_route2.jpg" alt="" class="object-cover object-center w-full h-full">
                                </div>
                                <div class="w-64 h-64 overflow-hidden rounded-xl">
                                    <img src="https://www.turbotech.com/storages/assets/img/services/IP.jpg" alt="" class="object-cover object-center w-full h-full">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button  onclick="new Helper().goto('{{ $attributes['url'] ?: '' }}')" class="px-5 py-1 sm:py-1.5 text-base font-normal text-white rounded-full ring-1 ring-sky-500 bg-sky-500 font-poppins">Register</button>
            </div>
        </div>
    </div>
</div>
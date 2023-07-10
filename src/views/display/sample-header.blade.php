@php
    /*
    |--------------------------------------------------------------------------
    |@name          : <x-button:danger>
    |@description   : Button danger 
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
    |//@variable ✨
    |//     $function = (object)[
    |//         'list'  => "/list",             // optional
    |//         'grid'  => "/grid",             // optional
    |//         'add'   => "",                  // optional
    |//         'excel' => "generateCSV('')",   // optional
    |//         'csv'   => "generateExcel('')", // optional
    |//         'pdf'   => "previewForm('')"    // optional
    |//     ]
    |   
    |   
    |    <x-heading:sample 
    |        type="reporting"   // required
    |        title="Name Cards" // required
    |        icon="#users"      // optional
    |        new                // optional
    |        :func="$function"  // optional
    |    />
    */
@endphp

<div class="flex items-center justify-between py-3 mx-2 text-gray-700 sm:mx-5 sm:py-0 print:hidden">
    
    <h1 class="flex items-center pb-3 text-lg font-medium leading-5 dark:text-gray-200"> 
        <i class="nil {{ $attributes['icon'] ? $attributes['icon'] : '' }} mr-1 text-xl font-thin text-primary-500"></i> 
        <span class="leading-7 line-clamp-1">{{ $attributes['title'] ? $attributes['title'] : '' }}</span> 
    </h1>
    
    <div class="flex items-center justify-end flex-shrink-0 gap-3 ml-auto font-medium">
                
        @isset ($attributes['func']->add) 
            @php
                $add = $attributes['func']->add ?? '';
            @endphp
            <div>
                <x-button:primary ripple class="!flex items-center gap-1 flex-shrink-0" onclick="smartView('{{ $add }}')">
                    <i class="nil #plus leading-5"></i> 
                    <span class="hidden leading-5 xs:block">Add</span>
                </x-button:primary>
            </div>
        @endisset
            
        @if(isset($attributes['new']) && isset($attributes['func']))
            <div class="flex items-center">
                @isset($attributes['func']->excel)
                    <button 
                        type="button" 
                        onclick="{{ $attributes['func']->excel ? $attributes['func']->excel : "" }}" 
                        class="group tooltip bg-white border-y border-l waves-effect flex !w-8 h-8 rounded-l-md drop-shadow-sm" 
                        title="View as list"
                        >
                        <i class="nil #file-csv text-slate-500 group-hover:text-primary-500"></i>
                    </button>
                @endisset
                @isset($attributes['func']->csv)
                    <button 
                        type="button" 
                        onclick="{{ $attributes['func']->csv ? $attributes['func']->csv : "" }}" 
                        class="group tooltip bg-white border waves-effect flex !w-8 h-8 drop-shadow-sm" 
                        title="View as list"
                        >
                        <i class="nil #file-spreadsheet text-slate-500 group-hover:text-primary-500"></i>
                    </button>
                @endisset
                @isset($attributes['func']->pdf)
                    <button 
                        type="button" 
                        onclick="{{ $attributes['func']->pdf ? $attributes['func']->pdf : "" }}" 
                        class="group tooltip bg-white border-y border-r waves-effect flex !w-8 h-8 rounded-r-md drop-shadow-sm" 
                        title="View as grid"
                        >
                        <i class="nil #file-pdf text-slate-500 group-hover:text-primary-500"></i>
                    </button>
                @endisset
            </div>
            
        @else
            <div>
                @isset($attributes['func']->excel)
                    <button 
                        target="_BLANK" 
                        onclick="{{ $attributes['func']->excel ? $attributes['func']->excel : "" }}" 
                        class="tooltip px-3 py-1 shadow-md border font-medium rounded-md dark:text-white cursor-pointer dark:bg-gray-900 !w-auto bg-success-50 border-success-500 text-success-500" 
                        title="Print CSV"
                        >
                            <i class="nil #file-csv text-lg"></i>
                    </button>
                @endisset
                @isset($attributes['func']->csv)
                    <button 
                        target="_BLANK" 
                        onclick="{{ $attributes['func']->csv ? $attributes['func']->csv : "" }}" 
                        class="tooltip px-3 py-1 shadow-md border font-medium rounded-md dark:text-white cursor-pointer dark:bg-gray-900 !w-auto bg-success-50 border-success-500 text-success-500" 
                        title="Print Excel"
                        >
                            <i class="nil #file-spreadsheet text-lg"></i>
                    </button>
                @endisset
                @isset( $attributes['func']->pdf )
                    <button 
                        target="_BLANK" 
                        onclick="{{ $attributes['func']->pdf ? $attributes['func']->pdf : "" }}" 
                        class="tooltip px-3 py-1 shadow-md border font-medium rounded-md dark:text-white cursor-pointer dark:bg-gray-900 !w-auto bg-danger-50 border-danger-500 text-danger-500" 
                        title="Print PDF" 
                        name="printPDF" 
                        id="printPDF"
                        >
                            <i class="nil #file-pdf text-lg"></i>
                    </button>
                @endisset
            </div>
            
        @endif

        <div class="flex items-center">
            @isset($attributes['func']->list)
                <button 
                    type="button" 
                    onclick="{{ $attributes['func']->list ? "smartView('".$attributes['func']->list."')" : "" }}" 
                    class="tooltip bg-white border-y border-l waves-effect flex !w-8 h-8 rounded-l-md drop-shadow-sm" 
                    title="View as list"
                    >
                        <i class="nil #list-ul {{ $attributes['view'] == 'list' ? 'text-primary-500' : 'text-slate-500' }}"></i>
                </button>
            @endisset
            @isset($attributes['func']->grid)
                <button 
                    type="button" 
                    onclick="{{ $attributes['func']->grid ? "smartView('".$attributes['func']->grid."')" : "" }}" 
                    class="tooltip bg-white border waves-effect flex !w-8 h-8 rounded-r-md drop-shadow-sm" 
                    title="View as grid"
                    >
                        <i class="nis #th {{ $attributes['view'] == 'grid' ? 'text-primary-500' : 'text-slate-500' }}"></i>
                </button>
            @endisset
        </div>
    </div>
</div>

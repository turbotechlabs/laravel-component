<div class="flex flex-col gap-3 overflow-hidden">
    <div class="grid grid-cols-2 gap-2">
        <div class="animate-pulse">
            <div class="h-4 p-3 bg-gray-300 rounded"></div>
        </div>
        <div class="animate-pulse">
            <div class="h-4 p-3 bg-gray-300 rounded"></div>
        </div>
    </div>
    <table class="w-full overflow-x-auto whitespace-normal border dataTable dark:border-slate-700">
        {{-- Header --}}
        <thead>
            <tr class="py-3 leading-8 dark:bg-slate-800 dark:text-slate-400 dark:border-t dark:border-gray-600 border-b bg-[color:rgba(var--ni-secondary-100)] text-left font-medium text-secondary-500 text-base">
                @for ($i = 0; $i < 5; $i++)
                <th class="cursor-pointer dark:text-slate-300">
                    <div class="animate-pulse">
                        <div class="h-4 p-4 rounded bg-slate-50"></div>
                    </div>
                </th>
                @endfor
            </tr>
        </thead>
        {{-- Body --}}
        <tbody>
            @for ($i = 0; $i < 10; $i++)
            <tr class="{{ $i % 2 == 0 ? 'even' : 'odd' }}">
                @for ($j = 0; $j < 5; $j++)
                <td class="cursor-pointer dark:text-slate-300">
                    <div class="animate-pulse">
                        <div class="h-4 p-2 rounded bg-slate-200"></div>
                    </div>
                </td>
                @endfor
            </tr>
            @endfor
        </tbody>
    </table>

    <div class="grid grid-cols-2 gap-2">
        <div class="animate-pulse">
            <div class="h-4 p-3 bg-gray-300 rounded"></div>
        </div>
        <div class="animate-pulse">
            <div class="h-4 p-3 bg-gray-300 rounded"></div>
        </div>
    </div>
</div>

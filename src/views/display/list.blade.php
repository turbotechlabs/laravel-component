@props([
    "options"   => [],
    "id"        => "",
    "api"       => "",
    "columns"   => "",
    "sort"      => "",
    "date"      => "",
    "detail"    => "",
    "edit"      => "",
    "remove"    => "",
    "isFilter"  => "",
    "byName"    => false,
])

@php
    $id        = $options["id"] ?: $id;
    $api       = $options["api"] ?: $api;
    $columns   = $options["columns"] ?: $columns;
    $sort      = $options["sort"] ?: $sort;
    $date      = $options["date"] ?: $date;
    $detail    = $options["detail"] ?: $detail;
    $edit      = $options["edit"] ?: $edit;
    $remove    = $options["remove"] ?: $remove;
    $isFilter  = $options["isFilter"] ?: false;
    $byName    = $options["byName"] ?: false;
@endphp

@dump($options)
{{-- Content --}}
<div class="{{$isFilter ? 'mt-5' : ''}}">
    {{-- Processing --}}
    <div id="tbProcessing">
        <x-table:loading></x-table:loading>
    </div>

    {{-- Table --}}
    <div id="ctDataTable" hidden>
        {{$anotherslot??''}}
        <table id="{{$id}}" class="w-full border whitespace-nowrap dark:border-gray-700"></table>
    </div>
</div>



{{-- JS --}}
<script type="text/javascript">
    // Table
    let id               = "{{ $id }}";
    let $_columns        = {!!json_encode($columns)!!};
    let $_targetDate     = {!!json_encode($date)!!};
    // Actions
    let $_detail         = "{{ $detail }}";
    let $_edit           = "{{ $edit }}";
    let $_remove         = "{{ $remove }}";
    let $_byname         = "{{ $byName }}";


    // Check column action
    let isActionVisible  = false;
    let isActionTarget;
    $.each($_columns, function( index, value )
    {
        if(value.name == "action")
        {
            isActionVisible = true;
            isActionTarget  = index;
            return;
        }
    });


    // DataTable
    var table = $("#"+id).DataTable(
    {
        // "ordering": false, // Close sorting on table.
        // "info": false, // Close showing data that has.
        // "dom": 'lftipr',
        // "deferRender": true,
        // "order": [[ 1, 'desc' ]],
        // "searching": false,
        // "searchDelay":1000,
        "serverSide": true,
        "processing": true,
        "cache": false,
        "bDestroy": true,
        "autoWidth": false,
        "scrollCollapse": false,
        "paging": true,
        "scrollX":true,
        "responsive": true,
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "ajax":
        {
            "url"   : "{{ route('table') }}",
            "data"  :
            {
                api     : "{{ $api }}",
                sort    : "{{ $sort }}",
                page    : function()
                {
                    var page    = ($("#"+id).DataTable().page.info().page + 1);
                    return page;
                },
                filters : function()
                {
                    let filters =
                    {
                        dateFrom : typeof $("input[name='dateFrom']").val() != 'undefined' ? $("input[name='dateFrom']").val() : '',
                        dateTo   : typeof $("input[name='dateTo']").val() != 'undefined' ? $("input[name='dateTo']").val() : '',
                        status   : typeof $("select[name='status']").val() != 'undefined' ? $("select[name='status']").val() : '',
                        team     : typeof $("select[name='team']").val() != 'undefined' ? $("select[name='team']").val() : '',
                    };

                    return JSON.stringify(filters);
                },
            }
        },
        "columns": $_columns,
        "columnDefs":
        [
            // Action button
            {
                "visible"   : isActionVisible, // Show or hidden column
                "targets"   : isActionTarget,
                "render"    : function(data,type,row)
                {

                    $actions = "<div class='flex justify-center'>";

                        // Edit
                    if($_edit !== '')
                    {
                        let editURL = `${$_edit}/${row.id}`;
                        if ($_byname == 1) {
                            editURL = `${$_edit}/${row.name}`;
                        }
                        console.log(row.name);
                        $actions +=     `<a
                                            title="Edit"
                                            href="${editURL}"
                                            class="inline-flex mx-1 space-x-2 text-base group text-primary-500 hover:text-danger-500 tooltip"
                                        ><i class="nir #edit  text-xs sm:text-base"></i>sagdasdgasdg</a>`;
                    }

                    // Detail
                    if($_detail !== '')
                    {
                        
                        let detailURL = `${$_detail}/${row.id}`;
                        if ($_byname == 1) {
                            detailURL = `${$_detail}/${row.name}`;
                        }
                                                                        
                        $actions +=     `<a
                                            title="Detail"
                                            href="${detailURL}"
                                            class="inline-flex mx-1 space-x-2 text-base group text-primary-500 hover:text-danger-500 tooltip"
                                        ><i class="nir #info-circle  text-xs sm:text-base"></i></a>`;
                    }
                    
                    // Delete
                    if($_remove !== '')
                    {
                        let removeURL = `${$_remove}/${row.id}`;
                        if ($_byname == 1) {
                            removeURL = `${$_remove}${row.name}`;
                        }
                        
                        $actions +=     `<a
                                            title="Delete"
                                            href="${removeURL}"
                                            class="inline-flex mx-1 space-x-2 text-base group text-primary-500 hover:text-danger-500 tooltip"
                                        ><i class="nir #trash-alt  text-xs sm:text-base"></a>`;
                    }

                    $actions += "</div>";

                    return $actions;
                },
            },
            // Convert Date to (Day-Month-Year)
            {
                "targets"   : $_targetDate,
                "render"    : function(data,type,row)
                {
                    if(data != null) {
                        return moment(data).format('DD-MM-YYYY');
                    }
                    else {
                        return '';
                    }
                }
            },
        ],
        "initComplete": function(settings, json)
        {
            // Table loading first draw
            if(json.draw == 1)
            {
                $("#tbProcessing").prop('hidden', true);
                $("#ctDataTable").prop('hidden', false);
            }


            // Re-draw colum adjust size in 100ms
            let doneTypingInterval = 100; // 100ms
            setTimeout(function()
            {
                $.fn.dataTable.tables({visible: true, api: true}).columns.adjust();
            }, doneTypingInterval);


            // Change search input default datatable
            $(".dataTables_filter").empty(); // Clear default input
            let _input      =  `<input
                                    name="search"
                                    id="search"
                                    type="text"
                                    placeholder="Search..."
                                    class="tableSearchfield"
                                    style="padding-top: 0rem; padding-bottom: 0rem;"
                                    minlength="3"
                                    required
                                >`; // New input

            $(".dataTables_filter").append(_input); // Append into filte

            // Search
            const input     = document.querySelector("input[name='search']");
            let timeoutId;

            const debounce  = (callback) => {
                clearTimeout(timeoutId); // Clear previously set timeout
                // Execute the callback function after 1200 ms has passed
                timeoutId = setTimeout(() => callback(), 1200);
            };

            // Register the debounce function on input event
            input.addEventListener("input", (event) => {
                debounce(() => {
                    let value = $("input[name='search']").val();
                    if(value.length != "") if(value.length >= 3) search(value);
                });
            });

            $("input[name='search']")
            .unbind()
            .bind("keyup", function(event)
            {
                let inputText   = this.value;
                let key         = event.key;
                let keyCode     = event.keyCode;

                if(keyCode == 8 || key == "Backspace") if(inputText.length == "") debounce(() => { search("") });
            });

            // Button Search
            $(".btnSearch").click(function()
            {
                table.draw();
            });
        },
        "language": {
            // "zeroRecords"       : "No records to display",
            'loadingRecords'    : 'Please wait - loading...',
            'processing'        : '<div class="absolute z-10 transform -translate-x-1/2 top-1/2 left-1/2"> <div class="loader"></div></div>',
        },
        "drawCallback": function( settings ) {},
    });


    // Search
    function search(search)
    {
        table.search(search).draw();
    }


    // Fix resize dataTable
    $( window ).on( "resize", function() {
        $.fn.dataTable.tables({visible: true, api: true}).columns.adjust();
    });
</script>

@extends('layouts.admin')
@section('title')
    | Clients
@endsection
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Clients</h2>
    <!-- BEGIN: Modal Toggle -->
    <div class="my-4">
        <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview"
           class="btn btn-primary">Add Products</a>
    </div>
    <!-- END: Modal Toggle -->
    <!-- BEGIN: Modal Content -->
    <div id="static-backdrop-modal-preview" class="modal" data-tw-backdrop="static" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body px-5 py-10">
                    <div class="text-left">
                        <div>
                            <label for="vertical-form-1" class="form-label">Client Name</label>
                            <input id="vertical-form-1" type="text" class="form-control"
                                   placeholder="Please write...">
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Client Number</label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="Please write...">
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-3" class="form-label">Client Address</label>
                            <input id="vertical-form-3" type="text" class="form-control" placeholder="Please write...">
                        </div>
                        <button class="btn btn-secondary mt-5 w-24 mr-2" data-tw-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary w-24 text-">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Modal Content -->
    @can('client_create')
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <a class="btn btn-primary shadow-md mr-2" href="{{ route('admin.clients.create') }}"
                   control-id="ControlID-2">Add New Client</a>
                <div class="dropdown">
                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown"
                            control-id="ControlID-3">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             icon-name="plus" class="lucide lucide-plus w-4 h-4" data-lucide="plus"><line x1="12" y1="5"
                                                                                                          x2="12"
                                                                                                          y2="19"></line><line
                                x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" icon-name="printer"
                                         data-lucide="printer" class="lucide lucide-printer w-4 h-4 mr-2">
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path
                                            d="M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2"></path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg>
                                    Print
                                </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" icon-name="file-text"
                                         data-lucide="file-text" class="lucide lucide-file-text w-4 h-4 mr-2">
                                        <path
                                            d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <line x1="10" y1="9" x2="8" y2="9"></line>
                                    </svg>
                                    Export to Excel
                                </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" icon-name="file-text"
                                         data-lucide="file-text" class="lucide lucide-file-text w-4 h-4 mr-2">
                                        <path
                                            d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <line x1="10" y1="9" x2="8" y2="9"></line>
                                    </svg>
                                    Export to PDF
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="w-56 relative text-slate-500">
                        <input type="text" class="form-control w-56 box pr-10" placeholder="Search..."
                               control-id="ControlID-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" icon-name="search"
                             class="lucide lucide-search w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"
                             data-lucide="search">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    @endcan

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 md:col-span-6">
            @foreach($clients as $client)
                <div class="intro-y col-span-12 md:col-span-6 my-5">
                    <div class="box">
                        <div class="flex flex-col lg:flex-row items-center p-5">
                            <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                     src="https://enigma.left4code.com/dist/images/profile-8.jpg">
                            </div>
                            <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                                <a href="" class="font-medium">{{ $client->name ?? '' }}</a>
                                <div class="text-slate-500 text-xs mt-0.5">{{ $client->phone_number ?? '' }} </div>
                                <div class="text-slate-500 text-xs mt-0.5">{{ $client->address ?? '' }} </div>
                            </div>
                            <div class="flex mt-4 lg:mt-0">
                                <a {{--href="{{ route('admin.clients.show', $client->id) }}"--}} class="btn btn-outline-secondary py-1 px-2"
                                   control-id="ControlID-8">Preview</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="intro-y col-span-12 md:col-span-6">

        </div>

    </div>
@endsection

@section('scripts')
    @parent
    <script>
        $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('client_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.clients.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                    var ids = $.map(dt.rows({selected: true}).nodes(), function (entry) {
                        return $(entry).data('entry-id')
                    });

                    if (ids.length === 0) {
                        alert('{{ trans('global.datatables.zero_selected') }}')

                        return
                    }

                    if (confirm('{{ trans('global.areYouSure') }}')) {
                        $.ajax({
                            headers: {'x-csrf-token': _token},
                            method: 'POST',
                            url: config.url,
                            data: {ids: ids, _method: 'DELETE'}
                        })
                            .done(function () {
                                location.reload()
                            })
                    }
                }
            }
            dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                orderCellsTop: true,
                order: [[1, 'desc']],
                pageLength: 25,
            });
            let table = $('.datatable-Client:not(.ajaxTable)').DataTable({buttons: dtButtons})
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function (e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })

    </script>
@endsection

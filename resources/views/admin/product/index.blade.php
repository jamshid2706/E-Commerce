@extends('layouts.admin')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-5">Product Grid</h2>
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
                        <form action="/file-upload" class="dropzone mt-3">
                            <div class="fallback">
                                <input name="file" type="file" multiple/>
                            </div>
                            <div class="dz-message" data-dz-message>
                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                {{--                                <div class="text-slate-500">--}}
                                {{--                                    This is just a demo dropzone. Selected files are <span--}}
                                {{--                                        class="font-medium">not</span> actually uploaded.--}}
                                {{--                                </div>--}}
                            </div>
                        </form>
                        <div>
                            <label for="vertical-form-1" class="form-label">Product Title</label>
                            <input id="vertical-form-1" type="text" class="form-control"
                                   placeholder="Product Title">
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Price</label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="Price">
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-3" class="form-label">Stock</label>
                            <input id="vertical-form-3" type="text" class="form-control" placeholder="Stock">
                        </div>
                        <label for="vertical-form-4" class="form-label mt-3">Category Id</label>
                        <select class="tom-select w-full">
                            <option value="1" disabled>Tanlang</option>
                            <option value="2">Category Id</option>
                        </select>
                        <div class="intro-y col-span-12 sm:col-span-6 mt-3">
                            <label for="comment" class="form-label w-full flex flex-col sm:flex-row">
                                Product Description
                                <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 5 characters</span>
                            </label>
                            <textarea id="comment" class="form-control" name="comment" placeholder="Type your comments"
                                      minlength="5">test</textarea>
                        </div>
                        <button class="btn btn-secondary mt-5 w-24 mr-2" data-tw-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary w-24 text-">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Modal Content -->
    @can('product_create')
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <a class="btn btn-primary shadow-md mr-2"
                   {{--href="{{ route('admin.products.create') }}" --}} control-id="ControlID-2">Add New Product</a>
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
                                    <i data-lucide="printer"></i>
                                    Print
                                </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item">
                                    <i data-lucide="file-text"></i>
                                    Export to Excel
                                </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item">
                                    <i data-lucide="file-text"></i>
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
                        <i data-lucide="search"></i>
                    </div>
                </div>
            </div>
        </div>
    @endcan
    <div class="grid grid-cols-12 gap-6 mt-5">
        @foreach($products as $key => $product)
            <div
                class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3 shadow-lg border-black btn-rounded-dark">
                <div class="box border-b-2 border-l-2 border-opacity-10 border-black">
                    <div class="p-5">
                        <div
                            class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                            <img alt="Midone - HTML Admin Template" class="rounded-md"
                                 src="https://enigma.left4code.com/dist/images/preview-8.jpg">
                            <span
                                class="absolute top-0 bg-pending/80 text-white text-xs m-5 px-2 py-1 rounded z-10">Featured</span>
                            <div class="absolute bottom-0 text-white px-5 pb-6 z-10">
                                <a href=""
                                   class="block font-medium text-base">{{ $product->title ?? '' }}</a>
                                <span
                                    class="text-white/90 text-xs mt-3">{{ $product->description ?? '' }}</span>
                            </div>
                        </div>
                        <div class="text-slate-600 dark:text-slate-500 mt-5">
                            <div class="flex items-center">
                                <i data-lucide="link"></i>
                                Price: {{ $product->buy ?? '' }}
                                Price: {{ $product->sell ?? '' }}
                            </div>
                            <div class="flex items-center mt-2">
                                <i data-lucide="layers"></i>
                                Remaining Stock: {{ $product->stock ?? '' }}
                            </div>
                            <div class="flex items-center mt-2">
                                <i data-lucide="check-square"></i>
                                Status: Active
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                        <a class="flex items-center text-primary mr-auto" {{--href="{{ route('admin.products.show', $product->id) }}"--}}>
                            <i data-lucide="eye"></i>
                            Preview
                        </a>
                        <a class="flex items-center mr-3" {{--href="{{ route('admin.products.edit', $product->id) }}"--}}>
                            <i data-lucide="check-square"></i>
                            Edit
                        </a>
                        <a class="flex items-center text-danger"
                           {{--href="{{ route('admin.products.destroy', $product->id) }}"--}} data-tw-toggle="modal"
                           data-tw-target="#delete-confirmation-modal">
                            <i data-lucide="trash"></i>
                            Delete
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('product_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.products.massDestroy') }}",
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
            let table = $('.datatable-Product:not(.ajaxTable)').DataTable({buttons: dtButtons})
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function (e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })

    </script>
@endsection

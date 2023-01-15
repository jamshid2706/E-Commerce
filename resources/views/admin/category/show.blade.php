@extends('layouts.admin')
@section('title')
    | Category
@endsection
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Categories</h2>
    <!-- BEGIN: Modal Toggle -->
    @include('admin.category.create')
    <div class="intro-y grid grid-cols-12 gap-5 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <div class="lg:flex intro-y">
                <div class="relative">
                    <input type="text" class="form-control py-3 px-4 w-full lg:w-64 box pr-10"
                           placeholder="Search item..." control-id="ControlID-3">
                    <i data-lucide="search"></i>
                </div>
                <select class="form-select py-3 px-4 box w-full lg:w-auto mt-3 lg:mt-0 ml-auto"
                        control-id="ControlID-4">
                    <option>Sort By</option>
                    <option>A to Z</option>
                    <option>Z to A</option>
                    <option>Lowest Price</option>
                    <option>Highest Price</option>
                </select>
            </div>
            <div class="grid grid-cols-12 gap-5 mt-5">
                @foreach($categories as $key => $category)
                    @if($category->id == $selected->id)
                        <a class="col-span-12 sm:col-span-3 2xl:col-span-3 box bg-primary p-5 cursor-pointer zoom-in">
                            <div class="font-medium text-base text-white">{{ $category->title }}</div>
                            <div
                                class="text-white text-opacity-80 dark:text-slate-500">{{ count($category->products) }} {{ count($category->products) == 1 ? 'Item' : 'Items'}}</div>
                        </a>
                    @else
                        <a href="/admin/categories/{{ $category->id }}"
                           class="col-span-12 sm:col-span-3 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                            <div class="font-medium text-base">{{ $category->title }}</div>
                            <div
                                class="text-slate-500">{{ count($category->products) }} {{ count($category->products) == 1 ? 'Item' : 'Items'}}</div>
                        </a>
                    @endif
                @endforeach
            </div>
            <div class="grid grid-cols-12 gap-5 mt-5 pt-5 border-t">
                @foreach($selected->products as $product)
                    <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                        <div class="box">
                            <div class="p-5">
                                <div
                                    class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                                    <img alt="Midone - HTML Admin Template" class="rounded-md"
                                         src="{{asset('storage/'.$product->image)}}">
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
                                        <i data-lucide="link" class="mr-1"></i>
                                        Buy: {{ $product->buy ?? '' }}
                                        Sell: {{ $product->sell ?? '' }}
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <i data-lucide="layers" class="mr-1"></i>
                                        Remaining Stock: {{ $product->stock ?? '' }}
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <i data-lucide="check-square" class="mr-1"></i>
                                        Status: Active
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                                <a class="flex items-center text-primary mr-auto" {{--href="{{ route('admin.products.show', $product->id) }}"--}}>
                                    <i data-lucide="eye" class="mr-1"></i>
                                    Preview
                                </a>
                                @include('admin.category.edit')
                                <a class="flex items-center text-danger"
                                   {{--href="{{ route('admin.products.destroy', $product->id) }}"--}} data-tw-toggle="modal"
                                   data-tw-target="#delete-confirmation-modal">
                                    <i data-lucide="trash-2" class="mr-1"></i>
                                    Delete
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(".category").click(function () {
            alert("hey");
            $(this).slideUp();
        });
        $(function () {
            c
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('category_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.categories.massDestroy') }}",
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
            let table = $('.datatable-Category:not(.ajaxTable)').DataTable({buttons: dtButtons})
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function (e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })

    </script>
@endsection

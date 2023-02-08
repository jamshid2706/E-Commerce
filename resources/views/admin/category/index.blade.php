@extends('layouts.admin')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Categories</h2>
    <div class="grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center">
            @include('admin.category.create')
        </div>
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center">
            <div class="w-full sm:w-auto sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search..."
                           control-id="ControlID-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         icon-name="search" class="lucide lucide-search w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"
                         data-lucide="search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                <tr>
                    <th class="whitespace-nowrap">IMAGES</th>
                    <th class="whitespace-nowrap">CATEGORY NAME</th>
                    <th class="whitespace-nowrap">PRODUCTS</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr class="intro-x">
                        <td class="w-40">
                            <div class="flex">
                                @if($category->products->isEmpty())
                                    <div class="w-10 h-10 image-fit zoom-in"></div>
                                @else
                                    @foreach($category->products->take(5) as $key => $product)
                                        <div class="w-10 h-10 image-fit zoom-in {{ $key != 0 ? '-ml-5' : '' }}">
                                            <img alt="{{ $product->title }}" class="tooltip rounded-full"
                                                 src="{{ asset('storage/' . $product->image) }}"
                                                 title="{{ $product->title }}">
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </td>
                        <td>
                            <a href="{{ route('admin.category.show', $category->id) }}"
                               class="font-medium whitespace-nowrap">{{ $category->title }}</a>
                        </td>
                        <td>
                            @if($category->products->isEmpty())
                                No products to show.
                            @else
                                @foreach($category->products->take(5) as $key => $product)
                                    {{ ($key != 0 ? ', ' : ''). $product->title  }}
                                @endforeach
                            @endif
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="javascript:;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" icon-name="check-square" data-lucide="check-square"
                                         class="lucide lucide-check-square w-4 h-4 mr-1">
                                        <polyline points="9 11 12 14 22 4"></polyline>
                                        <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                    </svg>
                                    Edit
                                </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                   data-tw-target="#delete-confirmation-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" icon-name="trash-2" data-lucide="trash-2"
                                         class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"></path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg>
                                    Delete
                                </a>
                            </div>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>

@endsection

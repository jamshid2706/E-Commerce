@extends('layouts.admin')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-5">Product Grid</h2>
    @include('admin.product.create')
    <div class="grid grid-cols-12 gap-6 mt-5">
        @foreach($products as $key => $product)
            <div
                class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3 shadow-lg border-black btn-rounded-dark">
                <div class="box border-b-2 border-l-2 border-opacity-10 border-black">
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

                        <a class="flex items-center text-primary mr-auto mr-3" {{--href="{{ route('admin.products.edit', $product->id) }}"--}}>
                            <i data-lucide="check-square" class="mr-1"></i>
                            Edit
                        </a>

                        <a class="flex items-center text-primary mr-auto" {{--href="{{ route('admin.products.show', $product->id) }}"--}}>
                            <i data-lucide="eye" class="mr-1"></i>
                            Preview
                        </a>

                        <a class="flex items-center text-danger"
                           {{--href="{{ route('admin.products.destroy', $product->id) }}"--}} data-tw-toggle="modal"
                           data-tw-target="#delete-confirmation-modal">
                            <i data-lucide="trash-2" class="mr-auto"></i>
                            Delete
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('scripts')

@endsection


@extends('layouts.mobile')
@section('content')
    <div class="pt-3">
        <div class="page-title d-flex">
            <div class="align-self-center me-auto">
                <h1 class="color-theme mb-0 font-18">Products</h1>
            </div>
            <div class="align-self-center ms-auto">
                <a href="{{ route('mobile.products.create') }}"
                   class="icon icon-xxs gradient-highlight color-white shadow-bg shadow-bg-xs rounded-s pt-2">
                    <i class="bi bi-bag-plus-fill"></i>
                </a>
            </div>
        </div>
    </div>
    @if($products->isEmpty())
        <p class="color-theme text-center font-20">
            Nothing to show!
        </p>
    @else
        @foreach ($products as $product)
            <div class="card card-style mb-3">
                <div class="content">
                    <div class="d-flex">
                        <div class="pe-3 me-auto">
                            <strong class="opacity-30 color-theme font-11">{{ $product->category->title ?? '' }}</strong>
                            <h3 class="mt-n2 pb-2">{{ $product->title }}</h3>
                            <p class="m-0">Buy: {{ $product->buy }}</p>
                            <p class="m-0">Sell: {{ $product->sell }}</p>
                            <p class="m-0">Stock: {{ $product->stock }}</p>
                        </div>
                        <div class="pt-1 ms-auto">
                            <img src="{{ asset('storage/'. $product->image) ?? ''}}" class="img-fluid rounded-s"
                                 width="110">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection

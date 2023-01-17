@extends('layouts.mobile')
@section('content')
    <div class="pt-3">
        <div class="page-title d-flex">
            <div class="align-self-center">
                <a href="#" data-back-button
                   class="me-3 ms-0 icon icon-xxs bg-theme rounded-s shadow-m pt-2">
                    <i class="bi bi-chevron-left color-theme font-14"></i>
                </a>
            </div>
            <div class="align-self-center me-auto">
                <h1 class="color-theme mb-0 font-18">{{ $category->title }}</h1>
            </div>
        </div>
    </div>

    <h4 class="color-theme m-3 font-18">Products</h4>
    @foreach ($category->products as $product)
        <div class="card card-style mb-3">
            <div class="content">
                <a href="{{ route('mobile.products.show', $product->id) }}">
                    <div class="d-flex">
                        <div class="pe-3 me-auto">
                            <strong class="opacity-30 color-theme font-11">{{ $product->category->title }}</strong>
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
                </a>
            </div>
        </div>
    @endforeach
@endsection

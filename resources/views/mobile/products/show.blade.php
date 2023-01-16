@extends('layouts.mobile')
@section('content')
    <div class="pt-3">
        <div class="page-title d-flex">
            <div class="align-self-center">
                <a href="#" data-back-button class="me-3 ms-0 icon icon-xxs bg-theme rounded-s shadow-m">
                    <i class="bi bi-chevron-left color-theme font-14"></i>
                </a>
            </div>
            <div class="align-self-center me-auto">
                <h1 class="color-theme mb-0 font-18">{{ $product->title }}</h1>
            </div>
            <div class="align-self-center ms-auto">
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-sidebar"
                   class="icon icon-xxs gradient-highlight color-white shadow-bg shadow-bg-xs rounded-s">
                    <i class="bi bi-list font-20"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content">
            <div class="card card-style">
                <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid">
                <div class="content pb-0 mb-0">
                    <h3>{{ $product->title }}</h3>
                    <p>{{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content">
            <div class="list-group list-custom list-group-flush list-group-m rounded-xs">
                <div class="list-group-item">
                    <div class="d-flex">
                        <div class="align-self-center me-auto">Product Title</div>
                        <div class="align-self-center ms-auto">{{ $product->title }}</div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="d-flex">
                        <div class="align-self-center me-auto">Buy</div>
                        <div class="align-self-center ms-auto">{{ $product->buy }}</div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="d-flex">
                        <div class="align-self-center me-auto">Sell</div>
                        <div class="align-self-center ms-auto">{{ $product->sell }}</div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="d-flex">
                        <div class="align-self-center me-auto">Stock</div>
                        <div class="align-self-center ms-auto">{{ $product->stock }}</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row m-1">
    <a href="{{ route('mobile.products.edit', $product->id) }}" class="col-5 m-auto btn btn-success">Edit</a>
    <a class="col-5 m-auto btn btn-danger"> Delete</a>
    </div>

@endsection

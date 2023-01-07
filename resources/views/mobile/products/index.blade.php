@extends('layouts.mobile')
@section('content')

    <div class="pt-3">
        <div class="page-title d-flex">
            <div class="align-self-center me-auto">
                <h1 class="color-theme mb-0 font-18">Products</h1>
            </div>
            <div class="align-self-center ms-auto">
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-sidebar"
                   class="icon icon-xxs gradient-highlight color-white shadow-bg shadow-bg-xs rounded-s pt-2">
                    <i class="bi bi-bag-plus-fill"></i>
                </a>
            </div>
        </div>
    </div>


    @foreach ($products as $product)

        <div class="card card-style mb-3">
            <div class="content">
                <div class="d-flex">
                    <div class="pe-3 me-auto">
                        <strong class="opacity-30 color-theme font-11">{{ $product->category->title }}</strong>
                        <h3 class="mt-n2 pb-2">{{ $product->title }}</h3>
                        <p>
                            Powerful icon or image columns powered by CSS3 Flexboxes.
                        </p>
                    </div>
                    <div class="pt-1 ms-auto">
                        <img src="images/pictures/6l.jpg" class="img-fluid rounded-s" width="110">
                    </div>
                </div>
            </div>
        </div>

        @endforeach

@endsection

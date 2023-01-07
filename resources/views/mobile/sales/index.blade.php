@extends('layouts.mobile')
@section('content')
    <div class="pt-3">
        <div class="page-title d-flex">
            <div class="align-self-center me-auto">
                <h1 class="color-theme mb-0 font-20">Sales</h1>
            </div>
            <div class="align-self-center ms-auto">
                <a href="#" data-auto-hide-target="#menu-auto-hide-modal"
                   data-auto-hide-time="15000"
                   class="icon icon-xxs gradient-highlight color-white shadow-bg shadow-bg-xs rounded-s pt-2">
                    <i class="bi bi-person-plus font-20"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content mb-0">
            <h6 class="font-700 opacity-50">Sales</h6>
            <div class="accordion border-0 accordion-s" id="accordion-group-6">
                @foreach ($sales as $sale)
                    <div class="accordion-item">
                        <button class="accordion-button collapsed px-0" type="button" data-bs-toggle="collapse"
                                data-bs-target="#accordion{{ $sale->id }}">
                            <span class="font-600 font-13">{{ $sale->client->name }}</span>
                            <i class="bi bi-plus font-20"></i>
                        </button>
                        <div id="accordion{{ $sale->id }}" class="accordion-collapse collapse"
                             data-bs-parent="#accordion-group-6">
                            <p class="pb-3 opacity-60">
                                This is the accordion body. It can support most content you want without restrictions.
                                You can use
                                images, videos lists or whatever you want.
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

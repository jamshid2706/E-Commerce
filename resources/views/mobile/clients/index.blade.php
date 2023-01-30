@extends('layouts.mobile')
@section('content')
    <div class="pt-3">
        <div class="page-title d-flex">
            <div class="align-self-center">
                <a data-back-button class="me-3 ms-0 icon icon-xxs bg-theme rounded-s shadow-m">
                    <i class="bi bi-chevron-left color-theme font-14"></i>
                </a>
            </div>
            <div class="align-self-center me-auto">
                <h1 class="color-theme mb-0 font-18">Clients</h1>
            </div>

            <div class="align-self-center ms-auto">
                <button onclick="toggle()" class="icon icon-xxs color-white shadow-bg shadow-bg-xs rounded-s">
                    <i class="color-theme bi bi-search"></i>
                </button>
                <a href="#" data-auto-hide-target="#menu-auto-hide-modal"
                   data-auto-hide-time="15000" class="icon icon-xxs gradient-highlight color-white shadow-bg shadow-bg-xs rounded-s">
                    <i class="bi bi-person-plus font-20"></i>
                </a>
            </div>
        </div>
    </div>

    <div style="transition: 1s" class="d-none search card card-style">
        <div class="content mb-0">
            <div class="form-custom form-label no-icon mb-3">
                <input id="search" type="text" class="form-control rounded-xs" id="c1" placeholder="Search here..." control-id="ControlID-1">
                <label for="c1" class="color-theme">Search</label>
            </div>
        </div>
    </div>

    <div class="card card-style">
        <div class="content mb-0">
            <h4>Clients</h4>
            <div id="Content" class="list-group list-custom list-group-m list-group-flush rounded-xs overflow-visible check-visited">
                @foreach ($clients as $client)
                    <a class="list-group-item" href="{{ route('mobile.clients.show', $client->id) }}">
                        <i class="bi bi-person-fill"></i>
                        <strong class="font-600">{{ $client->name }}</strong>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    @include('mobile.clients.create')
@endsection
@section('scripts')
<script type="text/javascript">
    function toggle(){
        $('.search').toggleClass('d-none')
    }
</script>
@endsection

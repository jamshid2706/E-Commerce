@extends('layouts.mobile')
@section('content')
    <div class="pt-3">
        <div class="page-title d-flex">
            <div class="align-self-center me-auto">
                <p class="color-highlight">Royal</p>
                <h1 class="color-theme">Dashboard</h1>
            </div>
            <div class="align-self-center ms-auto">
                <a href="#" data-bs-toggle="dropdown" class="icon gradient-blue shadow-bg shadow-bg-s rounded-m">
                    <img src="svgexport-13.svg" width="45" class="rounded-m" alt="img">
                </a>

                <div class="dropdown-menu">
                    <div class="card card-style shadow-m mt-1 me-1">
                        <div class="list-group list-custom list-group-s list-group-flush rounded-xs px-3 py-1">
                            <a href="page-wallet.html" class="list-group-item">
                                <i class="has-bg gradient-green shadow-bg shadow-bg-xs color-white rounded-xs bi bi-credit-card"></i>
                                <strong class="font-13">Wallet</strong>
                            </a>
                            <a href="page-activity.html" class="list-group-item">
                                <i class="has-bg gradient-blue shadow-bg shadow-bg-xs color-white rounded-xs bi bi-graph-up"></i>
                                <strong class="font-13">Royal</strong>
                            </a>
                            <a href="page-profile.html" class="list-group-item">
                                <i class="has-bg gradient-yellow shadow-bg shadow-bg-xs color-white rounded-xs bi bi-person-circle"></i>
                                <strong class="font-13">Account</strong>
                            </a>
                            <a href="page-signin-1.html" class="list-group-item">
                                <i class="has-bg gradient-red shadow-bg shadow-bg-xs color-white rounded-xs bi bi-power"></i>
                                <strong class="font-13">Log Out</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-install-pwa-ios">
        <div class="content">
            <img src="svgexport-13.svg" alt="img" width="80" class="rounded-m mx-auto my-4">
            <h1 class="text-center">Install Royal App</h1>
            <p class="boxed-text-xl">
                Install Royal App on your home screen, and access it just like a regular app. Open your Safari menu and tap
                "Add to Home Screen".
            </p>
            <a href="#"
               class="pwa-dismiss close-menu color-theme text-uppercase font-900 opacity-50 font-11 text-center d-block mt-n2"
               data-bs-dismiss="offcanvas">Maybe Later</a>
        </div>
    </div>
    <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-install-pwa-android">
        <div class="content">
            <img src="svgexport-13.svg" alt="img" width="80" class="rounded-m mx-auto my-4">
            <h1 class="text-center">Install Royal App</h1>
            <p class="boxed-text-l">
                Install Royal App to your Home Screen to enjoy a unique and native experience.
            </p>
            <a href="#"
               class="pwa-install btn btn-m rounded-s text-uppercase font-900 gradient-highlight shadow-bg shadow-bg-s btn-full">Add
                to Home Screen</a><br>
            <a href="#" data-bs-dismiss="offcanvas"
               class="pwa-dismiss close-menu color-theme text-uppercase font-900 opacity-60 font-11 text-center d-block mt-n1">Maybe
                later</a>
        </div>
    </div>

@endsection

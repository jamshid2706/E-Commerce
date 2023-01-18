<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Royal @yield('title')</title>
    @yield('css')
    <link rel="stylesheet" href="{{ asset('/css/app2.css') }}"/>
    <link rel="icon" type="image/icon" href="/svgexport-13.svg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
@include('admin.partials.mobile-menu')
@include('admin.partials.top-menu')
<div class="flex overflow-hidden">
    @include('admin.partials.menu')
    <div class="content">
        @yield('content')
    </div>
</div>
@yield('scripts')
<script src="{{ asset('/js/enigma.js') }}"></script>

</body>
</html>

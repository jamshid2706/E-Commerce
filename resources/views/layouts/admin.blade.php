<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> E - Commerce</title>
    <link rel="stylesheet" href="{{ asset('/css/app2.css') }}" />
</head>
<body>
@include('admin.partials.menu')
@yield('content')
@yield('scripts')
<script src="{{ asset('/js/enigma.js') }}"></script>
</body>
</html>

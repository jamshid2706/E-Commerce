<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Enigma admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Enigma Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">

    <title> LMS - Learning Management System </title>

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('/css/app2.css') }}" />
    @yield('styles')
</head>

<body class="login">
@yield('content')
@yield('scripts')
</body>

</html>

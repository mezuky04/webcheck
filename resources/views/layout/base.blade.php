<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <meta id="token" token="{{ csrf_token() }}">
    <title>WebCheck.xyz - Check if a website is offline</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/app.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
@include('layout.partials._header')

@yield('content')

@if (!isset($excludeFooter))
    @include('layout.partials._footer')
@endif

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/all.js"></script>
<script src="/js/main.js"></script>

</body>
</html>

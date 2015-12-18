<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>App Name - @yield('title')</title>
</head>
<body>
<div>
    <hr>
    @section('sidebar')
        This is the master sidebar.
    @show
</div>

<div>
    <hr>
    @section('header')
        This is the master header.
    @show
</div>

<div class="container">
    <hr>
    @yield('content')
    <hr>
</div>
</body>
</html>

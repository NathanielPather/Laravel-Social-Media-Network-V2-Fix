<html>
<head>
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    <title>Social Media Network - @yield('title')</title>
</head>

<body>
<ul>
    <li><a href="">Home</a></li>
    <li><a href="">About</a></li>
    <li><a href="">Login</a></li>
</ul>

<div class="container">
    <div class="col-1">
        @yield('form')
    </div>
    <div class="col-2">
        @yield('posts')
    </div>
    <div class="col-3"></div>

</div>
</body>
</html>

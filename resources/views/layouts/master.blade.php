<html>
<head>
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    <title>Social Media Network - @yield('title')</title>
</head>

<body>
<div class="nav">
    <ul>
        @if(auth()->check())
            <li><a>Hi {{ auth()->user()->username }}</a></li>
            <li><a href="/logout">Logout</a></li>
        @else
            <li><a href="/login">Login</a></li>
            <li><a href="register">Register</a></li>
        @endif
    </ul>
</div>

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

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header style="margin: 10px">
    @guest
        <a href="{{route('login')}}">Login</a>
    @else
        <a href="{{route('logout')}}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
            ({{auth()->user()->name}})</a>
        <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none">
            @csrf
        </form>
    @endguest
</header>
@yield('content')
</body>
</html>

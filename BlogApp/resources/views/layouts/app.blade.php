<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogApp</title>

    <link rel="stylesheet" href="{{ asset('build/assets/app-b2b49403.css') }}">

</head>

<body class="bg-secondary">
    <nav class="mb-5 navbar px-6 navbar-expand-lg navbar-light bg-white d-flex justify-content-between">
        <ul class=" d-flex list-unstyled ">
            <li class="nav-item px-3">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="{{ route('posts') }}">Post</a>
            </li>
        </ul>

        <ul class=" d-flex list-unstyled ">
            @auth
                <li class="px-3">
                    <a class="nav-link" href="#">{{auth()->user()->name}}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="px-3">
                    @csrf
                    <button type="submit" class="btn btn-link nav-link p-0 m-0" >Logout</button>
                </form>
                </li>
            @endauth
            @guest
                <li class=" px-3">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class=" px-3">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>

</html>

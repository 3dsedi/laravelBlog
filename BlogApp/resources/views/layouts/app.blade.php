<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogApp</title>

    <link rel="stylesheet" href="{{asset('build/assets/app-b2b49403.css')}}">

</head>
<body class="bg-secondary">
<nav class="mb-5 navbar px-6 navbar-expand-lg navbar-light bg-white d-flex justify-content-between">
  <ul class=" d-flex list-unstyled ">
    <li class="nav-item px-3">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item px-3">
      <a class="nav-link" href="#">Dashboard</a>
    </li>
    <li class="nav-item px-3">
      <a class="nav-link" href="#">Post</a>
    </li>
  </ul>
  <ul class=" d-flex list-unstyled ">
    <li class="px-3">
      <a class="nav-link" href="#">Sedi Ghazinezam</a>
    </li>
    <li class=" px-3">
      <a class="nav-link" href="#">Login</a>
    </li>
    <li class=" px-3">
      <a class="nav-link" href="{{route('register')}}">Register</a>
    </li>
    <li class=" px-3">
      <a class="nav-link" href="#">Logout</a>
    </li>
  </ul>
  </nav>
  @yield('content')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') - Blog</title>
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>
<body>
  <header>
    <h1 class="text-xl">Courses</h1>
    <nav>
      <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('courses.index') }}">Courses</a></li>
        <li><a href="{{ route('about_us') }}">About us</a></li>
      </ul>
    </nav>
  </header>
  @yield('content')
</body>
</html>
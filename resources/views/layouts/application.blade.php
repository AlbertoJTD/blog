<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') - Blog</title>
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

  <style>
    .active {
      color: red;
      font-weight: bold;
    }
  </style>
</head>
<body>
  @include('partials._header')

  @yield('content')
</body>
</html>
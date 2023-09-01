@extends('layouts.application')

@section('title', 'Index')

@section('content')
  <h1>Welcome to the main page</h1>
  <a href="/courses/create" class="bg-teal-100 mb-5">Create new course</a>
  <ul>
    @foreach ($courses as $course)
        <li>{{ $course->name }}</li>
    @endforeach

    {{ $courses->links() }}
  </ul>
@endsection
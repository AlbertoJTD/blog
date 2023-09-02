@extends('layouts.application')

@section('title', 'Index')

@section('content')
  <h1>Welcome to the main course page</h1>
  <a href="{{ route('courses.create') }}" class="bg-teal-100 mb-5">Create new course</a>
  <ul>
    @foreach ($courses as $course)
        <li>
          <a href="{{ route('courses.show', $course) }}">{{ $course->name }}</a>
        </li>
    @endforeach

    {{ $courses->links() }}
  </ul>
@endsection
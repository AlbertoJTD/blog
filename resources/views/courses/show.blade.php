@extends('layouts.application')

@section('title', 'Show')

@section('content')
  <a href="{{ route('courses.index') }}">Back to Courses</a>
  <a href="{{ route('courses.edit', $course) }}">Edit</a>

  <h1>Show view: {{ $course->id }}</h1>
  <p><strong>Name: </strong> {{ $course->name }}</p>
  <p><strong>Description: </strong> {{ $course->description }}</p>
  <p><strong>Category: </strong> {{ $course->category }}</p>
  
  <form method="POST" action="{{ route('courses.destroy', $course) }}">
    @csrf
    @method('delete')

    <button type="submit">Delete</button>
  </form>
  <a href=""></a>
@endsection
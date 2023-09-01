@extends('layouts.application')

@section('title', 'Show')

@section('content')
  <a href="{{ route('courses.index') }}">Back to Courses</a>
  <h1>Show view: {{ $course->id }}</h1>
  <p><strong>Name: </strong> {{ $course->name }}</p>
  <p><strong>Description: </strong> {{ $course->description }}</p>
  <p><strong>Category: </strong> {{ $course->category }}</p>
@endsection
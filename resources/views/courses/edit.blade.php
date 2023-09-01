@extends('layouts.application')

@section('title', 'Edit')

@section('content')
  <h1>Edit course</h1>
  <form method="POST" action="{{ route('courses.update', $course) }}">
    @csrf
    @method('put')

    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Type a name: " value="{{ $course->name }}">
    <br>

    <label for="description">Description: </label>
    <textarea name="description" id="" cols="30" rows="10">
      {{ $course->description }}
    </textarea>
    <br>

    <label for="category">Category</label>
    <input type="text" name="category" placeholder="Type a category" value="{{ $course->category }}">

    <button type="submit" class="btn btn-outline-primary">Update</button>
  </form>
@endsection
@extends('layouts.application')

@section('title', 'Create')

@section('content')
  <h1>Create a new course</h1>
  <form method="POST" action="{{ route('courses.store') }}">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Type a name: ">
    <br>

    <label for="description">Description: </label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <br>

    <label for="category">Category</label>
    <input type="text" name="category" placeholder="Type a category">

    <button type="submit" class="btn btn-outline-primary">Send</button>
  </form>
@endsection
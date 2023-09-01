@extends('layouts.application')

@section('title', 'Create')

@section('content')
  <h1>Create a new course</h1>
  <form method="POST" action="{{ route('courses.store') }}">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Type a name: ">
    @error('name')
      <p>*{{ $message }}</p>
    @enderror
    <br>

    <label for="description">Description: </label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    @error('description')
      <p>*{{ $message }}</p>
    @enderror
    <br>

    <label for="category">Category</label>
    <input type="text" name="category" placeholder="Type a category">
    @error('category')
      <p>*{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-outline-primary">Send</button>
  </form>
@endsection
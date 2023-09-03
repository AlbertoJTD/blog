@extends('layouts.application')

@section('title', 'Contact form')

@section('content')
  <h1>Write your message</h1>

  <form method="POST" action="{{ route('contact.store') }}">
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" id="" value="{{ old('name') }}">
    @error('name')
      <p>{{ $message }}</p>
    @enderror
    <br>

    <label for="email">Email</label>
    <input type="text" name="email" id="" value="{{ old('email') }}">
    @error('email')
      <p>{{ $message }}</p>
    @enderror
    <br>

    <label for="message">Message</label>
    <textarea name="message" id="" cols="30" rows="10">{{ old('message') }}</textarea>
    @error('message')
      <p>{{ $message }}</p>
    @enderror
    <br>

    <button type="submit">Send message</button>
  </form>

  @if (session('message'))
    <script>
      alert("{{ session('message') }}")
    </script>
  @endif

@endsection

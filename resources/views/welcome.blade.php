@extends('layouts.application')

@section('title', 'Root')

@section('content')
    <h1>Welcome to the main page</h1>

    <x-alert type="info">
        {{-- secondary slot -> this one does not need a prop in the alert component --}}
        <x-slot name="title">
            This is a title - example 1
        </x-slot>

        {{-- This section is stored in the variable $slot--}}
        <p>This a test text for example 1</p>
    </x-alert>
    
    {{-- There must be a title prop in the alert component --}}
    <x-alert type="danger" title="This is a title - example 2">
        {{-- This section is stored in the variable $slot--}}
        <p>This a test text for example 2</p>
    </x-alert>
@endsection

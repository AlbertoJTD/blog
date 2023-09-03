@extends('layouts.application')

@section('title', 'Root')

@section('content')
    <h1>Welcome to the main page</h1>

    @php
        $type = 'info';
    @endphp

    <x-alert :type="$type" id="example-1" class="hover:bg-green-200">
        {{-- secondary slot -> this one does not need a prop in the alert component --}}
        <x-slot name="title">
            This is a title - example 1
        </x-slot>

        {{-- This section is stored in the variable $slot--}}
        <p>This a test text for example 1</p>
    </x-alert>
    
    {{-- There must be a title prop in the alert component --}}
    <x-alert id="example-2" type="danger" title="This is a title - example 2" class="hover:bg-orange-200">
        {{-- This section is stored in the variable $slot--}}
        <p>This a test text for example 2</p>
    </x-alert>
@endsection

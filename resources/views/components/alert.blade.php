@props(['title', 'type' => 'info'])

@php
  switch ($type) {
    case 'info':
      $classes = "bg-teal-100";
      break;
    
    case 'danger':
      $classes = "bg-red-500";
      break;
  }
@endphp

<div {{ $attributes }} class="{{ $classes }}">
  <h1>{{ $title }}</h1>
  {{ $slot }}
</div>
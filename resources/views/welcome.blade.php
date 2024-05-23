@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
  @foreach($events as $event)
    <h3>{{ $event->title }}</h3>
    <p>{{ $event->description }}</p>
  @endforeach
@endsection

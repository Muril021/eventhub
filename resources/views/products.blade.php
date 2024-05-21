@extends('layouts.main')
@section('title', 'Produtos')
@section('content')
  <h1>Página de produtos</h1>
  @if($search !== null)
    <p>O usuário está buscando por: {{ $search }}</p>
  @endif
@endsection

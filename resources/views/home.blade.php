@extends('layout.app')

@section('title','home')

@section('content')

     <h1>@lang('Home')</h1>
     @auth  {{auth()->user()->name }} @endauth
     <p>welcome {{ $name ?? "invitado"}} </p>
@endsection
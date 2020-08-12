@extends('layout.app')

@section('title','home')

@section('content')
     <h1>@lang('Home')</h1>
     <p>welcome {{ $name ?? "invitado"}} </p>
@endsection

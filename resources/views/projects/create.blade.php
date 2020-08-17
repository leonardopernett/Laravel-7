@extends('layout.app')

@section('title','crear')


@section('content')
    <h3>create project</h3>

   @include('partial.validation')

    <form action="{{ route ('project.store') }}" method="POST">
        @include('projects.form',['button'=>'create'])
    </form>

@endsection

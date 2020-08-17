@extends('layout.app')

@section('title','editar')


@section('content')
    <h3>editar project</h3>

    @include('partial.validation')


    <form action="{{ route ('project.update', $project->id) }}" method="POST">
        @method('PUT')
        @include('projects.form',['button'=>'update'])
    </form>

@endsection

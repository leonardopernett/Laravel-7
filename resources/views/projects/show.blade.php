@extends('layout.app')


@section('title', 'portafolio | '. $project->title)
@section('content')


   <h1>{{ $project->title}}</h1>


    @auth
      <a href="{{route('project.edit', $project->id)}}">editar</a>
     <form action="{{route('project.destroy', $project->id)}}" method="POST">
     	@csrf @method('DELETE')
     	<button type="">delete</button>
     </form>

    @endauth

    <p> {{ $project->description}}</p>
    <p>{{ $project->created_at->diffForHumans()}}</p>
@endsection
@extends('layout.app')

@section('title','project')


@section('content')
    <h1>@lang('Project')</h1>
<ul>

   @forelse($projectos as $project)
   <li>
   	   <a href="{{ route('project.show', $project->id) }}">
   	   	 <p>{{ $project->title }}</p>
   	   </a>
   </li>
      @empty
 <p>no hay nada </p>

   @endforelse
   {{ $projectos->links()}}
</ul>

@endsection

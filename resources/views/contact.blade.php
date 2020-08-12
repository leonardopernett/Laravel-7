@extends('layout.app')

@section('title','contact')

<style>
	.validate {
		color:red;
	}
</style>
@section('content')
   <h1> @lang('Contact') </h1>

   <form action="{{route('contact')}}" method="POST">
   	@csrf
   	<input type="text" name="name" placeholder="name" value="{{old('name')}}"><br>
   	   {!! $errors->first('name','<small class="validate">:message</small><br>') !!}

   	<input type="text" name="email" placeholder="email" value="{{old('email')}}"><br>
   	   {!! $errors->first('email','<small class="validate">:message</small><br>') !!}

   	<input type="text" name="subject" placeholder="subject" value="{{old('subject')}}"><br>
   	 {!! $errors->first('subject','<small class="validate">:message</small><br>') !!}

   	<textarea name="content"  rows="3"placeholder="content"></textarea><br>
   	  {!! $errors->first('content','<small class="validate">:message</small><br>') !!}

   	 <button type="submit">send</button>
   </form>

@endsection

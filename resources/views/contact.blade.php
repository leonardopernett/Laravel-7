@extends('layout.app')

@section('title','contact')

<style>
	.validate {
		color:red;
	}
</style>
@section('content')
   <h1> @lang('Contact') </h1>

   @if(session()->has('flash'))
       {{session('flash')}}
    @else
      <form action="{{route('contact')}}" method="POST">
         @csrf
         <input type="text" name="name" placeholder="name" value="{{old('name')}}"><br>
            @error('name')<small class="validate">{{$message}}</small><br> @enderror

         <input type="text" name="email" placeholder="email" value="{{old('email')}}"><br>
              @error('email')<small class="validate">{{$message}}</small><br> @enderror

         <input type="text" name="subject" placeholder="subject" value="{{old('subject')}}"><br>
            @error('subject')<small class="validate">{{$message}}</small><br> @enderror

         <textarea name="content"  rows="3"placeholder="content"></textarea><br>
             @error('content')<small class="validate">{{$message}}</small><br> @enderror

          <button type="submit">send</button>
      </form>
   @endif



@endsection

@extends('layouts.app')

@section('content')
<h1>Posts</h1>
    @if(count($foods) > 0)
        @foreach($foods as $food)
        <div class="well row align-items-center">
            <div class="col-sm-4 col-md-4 col-lg-4" >
                <h3><a href="{{ url('/') }}/foods/{{ $food->id }}">{{ $food->title }}</a></h3>
                <img id={{ $food->image }}  src="{{URL::asset('images/food.jpg')}}" width="100%">
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8" style="text-align: center; padding-top: 7%;" >
                <p style="color: black;">{{ $food->description }}</p>
            </div>
        </div>
        @endforeach
        {{ $foods->links() }}
    @else 
    <p>No posts found </p>
    @endif
    @endsection
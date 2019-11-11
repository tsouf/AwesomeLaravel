@extends('layouts.app')

@section('content')
<h1>Food</h1>
    @if(count($foods) > 0)
        @foreach($foods as $food)
        <a href="{{ url('/') }}/foods/{{ $food->id }}">
        <div class="well row align-items-center">
                
            <div class="col-sm-12 col-md-4 col-lg-4" >
                <h3 class="text-center">{{ $food->title }}</h3>
                <img id={{ $food->image }}  src="{{ URL::asset("images/$food->image") }}" width="50%" style="margin-left: auto;margin-right: auto;display: block;">
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8" style="text-align: center; padding-top: 7%;" >
                <p style="color: black;">{{ $food->description }}</p>
            </div>
        </div>
    </a>
        @endforeach
        {{ $foods->links() }}
    @else 
    <p>No food for you </p>
    @endif
    @endsection
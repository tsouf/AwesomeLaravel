@extends('layouts.app')

@section('content')
<div >
    <a href="{{ url('/') }}/foods" class="btn btn-default" >Go Back</a>
    <div style="padding-right: 15%;padding-left: 15%;">
        <h1 style="word-wrap: break-word;">{{ $food->title }}</h1>
    </div>
    <div>
        <img id={{ $food->image }}  src="{{ URL::asset("images/$food->image") }}" width="70%" style="margin-left: auto;margin-right: auto;display: block;">
    </div>
    <div style="padding-top: 4%; padding-right: 15%;padding-left: 15%;">
        <p style="word-wrap: break-word; color:black;">{!! $food->recipe!!}</p>
    </div>
</div>
@endsection
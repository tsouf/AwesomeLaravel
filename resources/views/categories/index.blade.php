@extends('layouts.app')

@section('content')
<h1>Categories</h1>
    @if(count($categories) > 0)
        @foreach($categories as $category)
        <!--<a href="{{ action('CategoryController@filterCategories',['id' => $category->id]) }}">-->
            <div class="well row align-items-center"> 
                <h3 class="text-center">{{ $category->title }}</h3>
                <img id={{ $category->image }}  src="{{ URL::asset("images/$category->image") }}" width="10%" style="margin-left: auto;margin-right: auto;display: block;">
                {!! Form::open(['action' => ['CategoryController@filterCategories',$category->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                    {{ Form::submit('Next',['class' => 'btn btn-success']) }}
                {!! Form::close() !!}
            </div>
        <!--</a>-->
        @endforeach
        {{ $categories->links() }}
    @else 
    <p>No food for you </p>
    @endif
    @endsection
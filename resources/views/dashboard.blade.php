@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                        <h3>Your Favourite Food</h3>
                        @if(count($foods)>0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                               
                            </tr>
                            @foreach($foods as $food)
                            <tr>
                                    <td>{{ $food->title }}</td>
                                    <td style="text-align: center"><p>{{ $food->description }}</p></td>
                                    <td style="text-align: center">
                                        <a href="{{ url('/') }}/foods/{{ $food->id }}" class = "btn btn-primary">Go</a>
                                    </td>
                            </tr>
                            @endforeach
                        </table>
                        @else
                            <p>You have not added your favourite dishes</p>
                            <a href="{{ url('/') }}/foods" class = "btn btn-primary">Search your favourite dishes</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    

@endsection

@extends('layouts.app')
@section('title', 'My tables')
@section('content')
    <div class="container ">
        <p class="h3 mt-5 ">My tables</p>

        <ul class="list-group">
            @foreach($tables as $table_name => $table_url)
                <li class="list-group-item list-group-item-action"><a class="h5 text-dark" href="{{url($table_url)}}">{{$table_name}}</a></li>
            @endforeach
        </ul>
    </div>
@endsection

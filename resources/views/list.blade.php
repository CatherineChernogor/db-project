@extends('layouts.app')
@section('title', 'My tables')
@section('content')
    <div class="container ">
        <p class="h3 mt-5 ">My tables</p>

        <ul>
            @foreach($tables as $table)
                <li><a href="{{route('single')}}">{{$table->Tables_in_db_project}}</a></li>
            @endforeach
        </ul>
    </div>
@endsection

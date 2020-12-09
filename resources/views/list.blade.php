@extends('layouts.app')
@section('title', 'My tables')
@section('content')
    <div class="container ">
        <p class="h3 mt-5 ">My tables</p>

        <ul>
            {{--                @foreach($table as $tables)--}}
            <li><a href="{{route('single')}}">Single table</a></li>
            {{--                @endforeach--}}
        </ul>
    </div>
@endsection

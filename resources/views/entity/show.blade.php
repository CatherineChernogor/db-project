@extends('layouts.app')
@section('title', 'show '.$title.' table')
@section('content')
    <div class="container ">

        <p class="h4 mt-5 ">Show {{$title}}</p>

        @foreach($columns as $column_name => $column_type)
            <div class="form-group form-control">
                <label>{{$column_name}} : </label>
                <span>{{$entity->$column_name}}</span>

            </div>

        @endforeach

        <div>
            <a
                href="{{route($routeIndex)}}"
                class="btn btn-primary">Go back</a>
            <a
                href="{{route($routeEdit, $entity->id)}}"
                class="btn btn-outline-warning"
            >Edit</a>
        </div>
    </div>
@endsection

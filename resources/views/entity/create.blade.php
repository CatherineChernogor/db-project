@extends('layouts.app')
@section('title', 'create '.$title.' table')
@section('content')
    <div class="container ">

        <p class="h4 mt-5 ">Create {{$title}}</p>

        @if ($errors->any())
            <div class="alert alert-danger">You have errors to fix</div>
        @endif

        <form action="{{route($routeIndex)}}" method="post">

            @foreach($columns as $column_name => $column_type)
                <div class="form-group">
                    <label>{{$column_name}}</label>
                    <input type="text" class="form-control" name="{{$column_name}}"
                           value="{{@old($column_name) ?? $entity->$column_name}}"
                    >
                    @error($column_name)
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

            @endforeach
            {{@csrf_field()}}
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection

@extends('layouts.app')
@section('title', 'create '.$table_name.' table')
@section('content')
    <div class="container ">

        <p class="h4 mt-5 ">Create {{$table_name}}</p>

        @if ($errors->any())
            <div class="alert alert-danger">You have errors to fix</div>
        @endif

        <form action="{{route('create')}}" method="post">

            @foreach($columns as $col)
                <div class="form-group">
                    <label>{{$col}}</label>
                    <input type="text" class="form-control" name="{{$col}}"
{{--                           value="{{@old($col) ?? $line->$col}}"--}}
                    >
                    @error($col)
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

            @endforeach
            {{@csrf_field()}}
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection

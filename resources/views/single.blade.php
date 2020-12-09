@extends('layouts.app')
@section('title', $table_name)
@section('content')
    <div class="container">
        @if(session()->has('_message'))
            <div class="alert alert-success mt-1">{{session()->get('_message')}}</div>
        @endif
        <div class="h2 mt-4 d-flex flex-row">
            <span class="mr-4">Table: {{$table_name}}</span>
            <a class="btn btn-outline-primary" href="{{route('add')}}">+new</a>
        </div>
        <br>
        <table class="table">
            <thead>
            <tr>
                @foreach($columns as $col)
                    <th class="pl-4 pr-4" scope="col">{{$col}}</th>
                @endforeach
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($table as $line)

                <tr class="">
                    @foreach($columns as $col)
                        <td class="pl-4 pr-4">{{$line->$col}}</td>
                    @endforeach
                    <td>
                        <form action="{{route('edit')}}" method="post">
                            <input type="hidden" name="id" value="{{$line->id}}">
                            {{csrf_field()}}

                            <button class="btn btn-outline-warning" type="submit">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('delete')}}" method="post">
                            <input type="hidden" name="id" value="{{$line->id}}">
                            {{csrf_field()}}
                            <button class="btn btn-outline-danger" type="submit">Delete</button>
                        </form>
                        {{--                    <td><a class="btn btn-outline-danger" href="delete/{{ $line->id }}">Delete</a></td>--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

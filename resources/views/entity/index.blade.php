@extends('layouts.app')
@section('title', $title)
@section('content')
    <div class="container">
        @if(session()->has('_message'))
            <div class="alert alert-success mt-1">{{session()->get('_message')}}</div>
        @endif
        <div class="h2 mt-4 d-flex flex-row">
            <span class="mr-4">Table: {{$title}}</span>
            <a class="btn btn-outline-primary" href="{{route($routeCreate)}}">+new</a>
        </div>
        <br>
        @if(count($entities)<1)
            <span class="d-flex justify-content-center h4 text-secondary">Whops, table is empty</span>
        @else

            <table class="table">
                <thead>
                <tr>
                    @foreach($columns as $column_name => $column_type)
                        <th class="pl-4 pr-4" scope="col">{{$column_name}}</th>
                    @endforeach
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($entities as $entity)

                    <tr class="">
                        @foreach($columns as $column_name => $column_type)
                            @if($column_name=='storage name')
                                <td class="pl-4 pr-4">{{$entity->storage->name}}</td>
                            @else
                                <td class="pl-4 pr-4">{{$entity->$column_name}}</td>
                            @endif
                        @endforeach
                        <td class="d-flex flex-row-reverse">
                            <form action="{{route($routeShow, $entity->id)}}" method="post">
                                @method('delete')
                                {{csrf_field()}}
                                <button class="btn btn-outline-danger" type="submit">Delete</button>
                            </form>

                            <a
                                href="{{route($routeEdit, $entity->id)}}"
                                class="btn btn-outline-warning mr-2"
                            >Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

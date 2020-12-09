@extends('layouts.app')
@section('title', 'Table')
@section('content')
    <div class="container">
        <p class="h2 text-capitalize mt-4">Table name </p>


        <table class="table">
            <thead>
            <tr>
                {{--                @foreach($col as $cols)--}}
                <th class="pl-4 pr-4" scope="col"></th>
                {{--                @endforeach--}}

            </tr>
            </thead>
            <tbody>
            {{--                @foreach($line as $table)--}}

            <tr class="">
                <td><img class="rounded img-fluid" src="" alt="soap picture">
                </td>
                <td class="title pl-4"></td>
                <td class="pl-4 pr-4"></td>
                <td class="pl-4 pr-4"></td>
                <td class="pl-4 pr-4"></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="">
                        {{csrf_field()}}
                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            {{--                @endforeach--}}
            </tbody>
        </table>
    </div>
@endsection

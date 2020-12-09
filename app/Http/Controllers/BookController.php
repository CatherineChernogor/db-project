<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

// TODO somehow set columns and table_name global
    function show()
    {
        $book = new Book;
        $columns = $book->getTableColumns();
        $table = Book::all();
        $table_name = $book->getTable();
        return view('single', [
            'columns' => $columns,
            'table' => $table,
            'table_name' => $table_name
        ]);
        // TODO remove deleted_at column
    }

    function delete(Request $request)
    {

        $book = Book::find($request->id);
        $book->delete();
        return redirect(route('single'));
        // TODO add passing params to return to correct table
    }

    function edit(Request $request)
    {
        $book = Book::find($request->id);

        $columns = $book->getTableColumns();
        $table_name = $book->getTable();
        return view('form', [
            'line' => $book,
            'columns' => $columns,
            'table_name' => $table_name
        ]);
    }

    function add(Request $request)
    {
        $book = new Book();
        $columns = $book->getTableColumns();
        $table_name = $book->getTable();
        return view('add-form', [

            'columns' => $columns,
            'table_name' => $table_name
        ]);
    }

    public function store(Request $request)
    {
        return true;
    }

    function create(Request $request)
    {
        if ($this->store($request)) {
            $book = new Book();
            $columns = $book->getTableColumns();

            foreach ($columns as $column)
                $book->$column = $request->$column;
            $book->save();
// TODO check why created_id is empty
            return redirect(route('single'))->with('_message', 'New element has been added');
        }
    }

    function update(Request $request)
    {

        if ($this->store($request)) {
            $book = Book::find($request->id);
            $columns = $book->getTableColumns();

            foreach ($columns as $column)
                $book->$column = $request->$column;
            $book->save();

            return redirect(route('single'))->with('_message', 'Element has been updated');
        }
    }
}

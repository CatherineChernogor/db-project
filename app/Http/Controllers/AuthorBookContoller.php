<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorBookContoller extends EntityController
{
    protected $model = 'App\Models\AuthorBook';

    protected $title = 'Author - book';

    protected $routeIndex = 'author_book.index';
    protected $routeShow = 'author_book.show';
    protected $routeCreate = 'author_book.create';
    protected $routeEdit = 'author_book.edit';

    protected $validationRules = [];

    protected $formColumns = [
        'author_id' => 'number',
        'book_id' => 'number',

    ];

    protected $indexColumns = [
        'id' => 'number',
        'author_id' => 'number',
        'book_id' => 'number',

    ];


    public function store(Request $request)
    {
        $request->validate($this->getValidationRules($request));

        $book = Book::find($request->book_id);
        $book->authors()->attach($request->author_id);

        return redirect(route($this->routeIndex));
    }


    public function destroy(Request $request, $id)
    {
        $model = $this->getModel();

        $entity = $model::find($id);

        $book = Book::find($entity->book_id);
        $book->authors()->detach();

        return redirect(route($this->routeIndex));
    }

}

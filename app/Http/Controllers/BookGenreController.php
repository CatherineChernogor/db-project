<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookGenreController extends EntityController
{
    protected $model = 'App\Models\BookGenre';

    protected $title = 'Book - genre';

    protected $routeIndex = 'book_genre.index';
    protected $routeShow = 'book_genre.show';
    protected $routeCreate = 'book_genre.create';
    protected $routeEdit = 'book_genre.edit';

    protected $validationRules = [];

    protected $formColumns = [
        'genre_id' => 'number',
        'book_id' => 'number',
    ];

    protected $indexColumns = [
        'id' => 'number',
        'genre_id' => 'number',
        'book_id' => 'number',
    ];

    public function store(Request $request)
    {
        $request->validate($this->getValidationRules($request));

        $book = Book::find($request->book_id);
        $book->genres()->attach($request->genre_id);

        return redirect(route($this->routeIndex));
    }


    public function destroy(Request $request, $id)
    {
        $model = $this->getModel();

        $entity = $model::find($id);

        $book = Book::find($entity->book_id);
        $book->genres()->detach();

        return redirect(route($this->routeIndex));
    }

}

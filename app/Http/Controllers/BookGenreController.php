<?php

namespace App\Http\Controllers;

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

    protected $columns = [
        'book_id' => 'number',
        'genre_id' => 'number',
    ];

}

<?php

namespace App\Http\Controllers;

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

    protected $columns = [
        'book_id' => 'number',
        'author_id' => 'number',
    ];

}

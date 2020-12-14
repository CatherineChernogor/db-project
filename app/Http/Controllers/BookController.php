<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends EntityController
{
    protected $model = 'App\Models\Book';

    protected $title = 'Books';

    protected $routeIndex = 'book.index';
    protected $routeShow = 'book.show';
    protected $routeCreate = 'book.create';
    protected $routeEdit = 'book.edit';

    protected $validationRules = [
        'name' => 'required',
        'isbn' => 'required',
        'storage_id' => 'required',
    ];

    protected $formColumns = [
        'name' => 'text',
        'isbn' => 'text',
        'storage_id' => 'number',
    ];

    protected $indexColumns = [
        'id' => 'number',
        'name' => 'text',
        'isbn' => 'text',
        'storage name' => 'number',

    ];

}

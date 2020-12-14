<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends EntityController
{
    protected $model = 'App\Models\Genre';

    protected $title = 'Genres';

    protected $routeIndex = 'genre.index';
    protected $routeShow = 'genre.show';
    protected $routeCreate = 'genre.create';
    protected $routeEdit = 'genre.edit';

    protected $validationRules = [
        'name' => 'required',
    ];

    protected $formColumns = [
        'name' => 'text',
    ];
    protected $indexColumns = [
        'id' => 'number',
        'name' => 'text',
    ];

}

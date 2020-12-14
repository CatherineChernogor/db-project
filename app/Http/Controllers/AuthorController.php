<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends EntityController
{
    protected $model = 'App\Models\Author';

    protected $title = 'Authors';

    protected $routeIndex = 'author.index';
    protected $routeShow = 'author.show';
    protected $routeCreate = 'author.create';
    protected $routeEdit = 'author.edit';

    protected $validationRules = [
        'lastname' => 'required',
        'firstname' => 'required',
    ];

    protected $formColumns = [
        'lastname' => 'text',
        'firstname' => 'text',
    ];

    protected $indexColumns = [
        'id' => 'number',
        'lastname' => 'text',
        'firstname' => 'text',
    ];

}

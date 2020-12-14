<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StorageController extends EntityController
{
    protected $model = 'App\Models\Storage';

    protected $title = 'Storages';

    protected $routeIndex = 'storage.index';
    protected $routeShow = 'storage.show';
    protected $routeCreate = 'storage.create';
    protected $routeEdit = 'storage.edit';

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

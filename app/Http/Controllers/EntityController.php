<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class EntityController extends Controller
{
    protected $model;

    protected function getModel()
    {
        return $this->model;
    }

    protected $title;

    protected function getTitle()
    {
        return $this->title;
    }

    protected $routeIndex;
    protected $routeShow;
    protected $routeCreate;
    protected $routeEdit;

    protected $validationRules = [
        'name' => 'required',
    ];

    protected function getValidationRules(Request $request)
    {
        return $this->validationRules;
    }

    protected $columns = [
        'name' => 'text',
    ];

    protected function getColumns(Request $request)
    {
        return $this->columns;
    }

//    protected function getIndexColumns(Request $request)
//    {
//        return $this->getColumns($request);
//    }
//
//    protected function getCreateColumns(Request $request)
//    {
//        return $this->getColumns($request);
//    }
//
//    protected function getShowColumns(Request $request)
//    {
//        return $this->getColumns($request);
//    }
//
//    protected function getEditColumns(Request $request)
//    {
//        return $this->getColumns($request);
//    }


    public function index(Request $request)
    {
        $title = $this->getTitle();
        $routeIndex = $this->routeIndex;
        $routeShow = $this->routeShow;
        $routeCreate = $this->routeCreate;
        $routeEdit = $this->routeEdit;

        $model = $this->getModel();

        //$entities = $model::paginate(30);
        $entities = $model::all();

        $columns = $this->getColumns($request);

        return view('entity.index', compact('entities', 'columns', 'title', 'routeIndex', 'routeShow', 'routeCreate', 'routeEdit'));
    }


    public function create(Request $request)
    {
        $routeIndex = $this->routeIndex;

        $title = $this->getTitle();

        $model = $this->getModel();

        $entity = new $model;

        $columns = $this->getColumns($request);

        return view('entity.create', compact('entity', 'columns', 'title', 'routeIndex'));
    }


    public function store(Request $request)
    {
        $request->validate($this->getValidationRules($request));
        $data = $request->all();

        $model = $this->getModel();
        $entity = $model::create($data);

        return redirect(route($this->routeIndex));
    }


    public function show(Request $request, $id)
    {
        $title = $this->getTitle();

        $model = $this->getModel();

        $entity = $model::find($id);

        $columns = $this->getColumns($request);

        return view('entity.show', compact('entity', 'columns', 'title'));
    }


    public function edit(Request $request, $id)
    {
        $title = $this->getTitle();
        $routeIndex = $this->routeIndex;
        $routeShow = $this->routeShow;
        $routeCreate = $this->routeCreate;
        $routeEdit = $this->routeEdit;

        $model = $this->getModel();

        $entity = $model::find($id);

        $columns = $this->getColumns($request);

        return view('entity.edit', compact('entity', 'columns', 'title', 'routeIndex', 'routeShow', 'routeCreate', 'routeEdit'));
    }

    public function update(Request $request, $id)
    {
        $model = $this->getModel();
        $entity = $model::find($id);

        $request->validate($this->getValidationRules($request));

        $entity->update($request->all());

        // return redirect(route($this->routeShow, $entity->id));
        return redirect(route($this->routeIndex));
    }


    public function destroy(Request $request, $id)
    {
        $model = $this->getModel();

        $entity = $model::find($id);
        $entity->delete();

        return redirect(route($this->routeIndex));
    }
}

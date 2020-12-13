<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    function show()
    {
        $tables = [
            'Books' => '/book',
            'Genres' => '/genre',
            'Authors' => '/author',
            'Storages' => '/storage',
            'Book - genre' => '/book_genre',
            'Author - book' => '/author_book',

        ];
        return view('list', ['tables' => $tables]);
    }
}

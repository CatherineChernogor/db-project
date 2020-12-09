<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    function show(){
        $tables = DB::select('SHOW TABLES');
        //dd($tables);
        // TODO remove [failed_jobs migrations password_resets users] from table list
        return view('list', ['tables' => $tables]);
    }
}

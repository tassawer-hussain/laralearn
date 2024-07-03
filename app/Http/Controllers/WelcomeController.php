<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    // index method
    public function index() {

        // 3 different ways to fetch data from the database in Laravel

        // 1. Using raw SQL queries
        // $users = DB::select('select * from users');
        // dd($users);
        
        // 2. Query Builder
        $users = DB::table('users')->select(['name', 'email'])->whereNotNull('email')->orderBy('name')->get();
        dd($users);
        

        // 3. Eloquent ORM

        

        return view('welcome');
    }
}

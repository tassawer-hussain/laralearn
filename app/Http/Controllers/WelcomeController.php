<?php

namespace App\Http\Controllers;

use App\Models\Student;
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
        // $users = DB::table('users')->select(['name', 'email'])->whereNotNull('email')->orderBy('name')->get();
        // dd($users);
        

        // 3. Eloquent ORM - Fetch student table data using Student Model

        // Fetch all results
        // $students = Student::all();
        // // dd($students);
        // foreach( $students as $student ) {
        //     echo $student->name . "<br>";
        // }

        // Add a new student record.
        $student = new Student();
        $student->name = "ORM Student";
        $student->email = "orm@gmail.com";
        $student->save();


        // get specific column results
        $students = Student::select(['name', 'email'])->whereNotNull('email')->orderBy('name')->get();
        foreach( $students as $student ) {
            echo $student->name . "<br>";
        }
       
        


        // return view('welcome');
    }
}

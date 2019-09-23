<?php

namespace App\Http\Controllers;

use App\todo;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    //
    public function index(){

        // Fetch all todos from the database
        // Display them on the index page

        $todos = Todo::all();


        return view('todos.index')->with('todos', Todo::all());

    }
}

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
    public function show(Todo $todo){
        // dd($todoId);
        return view('todos.show')->with('todo', $todo);
    }

    public function create(){
        return view('todos.create');
    }
    public function store(){
        // dd(request()->all());
        $this->validate(request(), [
            'name'=> 'required|min:6|max:50',
            'description' => 'required|min:10'
            ]);
        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data["name"];
        $todo->description = $data["description"];
        $todo->completed = false;
        $todo->save();
        session()->flash('success', ' Todo created Sucessfully');
        return redirect('/todos');
    }

    public function update(Todo $todo){
        // $todo = Todo::find($todoId);
        return view('todos.update')->with("todo", $todo);

    }
    public function update_todo(Todo $todo){
        // dd(request()->all());
        $this->validate(request(), [
            'name'=> 'required|min:6|max:50',
            'description' => 'required|min:10'
            ]);
        $data = request()->all();
        // $todo = Todo::find($todoId);
        $todo->name = $data["name"];
        $todo->description = $data["description"];
        $todo->completed = false;
        $todo->save();
        session()->flash('success', ' Todo Updated Sucessfully');
        return redirect('/todos');
    }

    public function delete(Todo $todo){
        // $todo = Todo::find($todoId);
        $todo->delete();
        session()->flash('success', ' Todo Deleted Sucessfully');
        return redirect('/todos');
    }
    public function complete(Todo $todo){
        $todo->completed = true;
        $todo->save();
        session()->flash('success', ' Weldone! To-do Completed sucessfully');
        return redirect('/todos');

    }


}



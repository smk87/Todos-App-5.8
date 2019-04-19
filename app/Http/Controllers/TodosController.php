<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        // Fetch and display data from DB
        return view('todos.index')->with('todos', Todo::all());
    }

    public function show($todoId)
    {
        return view('todos.show')->with('todo', Todo::find($todoId));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store()
    {
        // Get data from input fields
        $data = request()->all();

        //  Assign data to DB
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        // Save to DB
        $todo->save();

        return redirect('/todos');
    }
}
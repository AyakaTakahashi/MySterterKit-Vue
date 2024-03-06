<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::all();
    }

    public function store(Request $request){
        return Todo::create($request->all()); 
    }

    public function detail(Todo $todo){
        return $todo;
    }

    public function update(Request $request, Todo $todo){
        $todo->update($request->all());
        return $todo;
    }

    public function delete(Todo $todo){
        $todo->delete();
        return $todo;
    }
}

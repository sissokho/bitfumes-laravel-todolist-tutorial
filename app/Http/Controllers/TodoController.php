<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index()
    {
        return view('todos.index', [
            'todos' => Todo::orderBy('completed')->get()
        ]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoCreateRequest $request)
    {
        Todo::create($request->validated());
        return back()->with('message', 'Todo Created Successfully.');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', [
            'todo' => $todo
        ]);
    }

    public function update(TodoCreateRequest $request, Todo $todo)
    {
        $todo->update($request->validated());
        return redirect('/todos')->with('message', 'Todo Updated!');
    }

    public function complete(Todo $todo)
    {
        $todo->update(['completed' => !$todo->completed]);

        if ($todo->completed) {
            return back()->with('message', 'Todo marked as completed!');
        }

        return back();
    }
}

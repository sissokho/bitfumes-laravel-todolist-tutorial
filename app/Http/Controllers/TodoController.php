<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    public function index()
    {
        return view('todos.index', [
            'todos' => Auth::user()->todos()->orderBy('completed')->get()
        ]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoCreateRequest $request)
    {
        Auth::user()->todos()->create($request->validated());
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

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return back()->with('message', 'Todo deleted!');
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

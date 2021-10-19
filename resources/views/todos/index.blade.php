@extends('todos.layout')

@section('content')
<div class="flex justify-center mb-5">
    <h1 class="text-2xl">All your Todos</h1>
    <a href="/todos/create" class="mx-5 py-2 px-2 bg-blue-400 cursor-pointer rounded text-white">Create New</a>
</div>

<ul>
    @foreach ($todos as $todo)
    <li>{{ $todo->title }}</li>
    @endforeach
</ul>
@endsection

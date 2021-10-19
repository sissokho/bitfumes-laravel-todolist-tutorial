@extends('todos.layout')

@section('content')
<div class="flex justify-center border-b py-4">
    <h1 class="text-2xl">All your Todos</h1>
    <a href="/todos/create" class="mx-5 py-2 px-2 bg-blue-400 cursor-pointer rounded text-white">Create New</a>
</div>

<ul class="pt-4">
    <x-alert />
    @foreach ($todos as $todo)
    <li class="flex justify-between p-3">
        <p>{{ $todo->title }}</p>
        <a href="/todos/{{ $todo->id }}/edit" class="mx-5 py-2 px-2 bg-yellow-500 cursor-pointer rounded text-white">Edit</a>
    </li>
    @endforeach
</ul>
@endsection

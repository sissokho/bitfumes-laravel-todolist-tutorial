@extends('todos.layout')

@section('content')
<div class="flex justify-center border-b py-4">
    <h1 class="text-2xl">All your Todos</h1>
    <a href="/todos/create" class="mx-5 py-2 px-2 bg-blue-400 cursor-pointer rounded text-white">Create New</a>
</div>

<ul class="pt-4">
    <x-alert />
    @foreach ($todos as $todo)
    <li class="flex justify-between items-end p-3">
        <p class="{{ $todo->completed ? 'line-through' : '' }}">{{ $todo->title }}</p>
        <div>
            <a href="/todos/{{ $todo->id }}/edit" class="mx-5 py-2 px-2 bg-yellow-500 cursor-pointer rounded text-white">Edit</a>
            <span class="px-2 text-4xl font-black {{ $todo->completed ? 'text-green-400' : 'text-gray-400' }} cursor-pointer">&check;</span>
        </div>
    </li>
    @endforeach
</ul>
@endsection

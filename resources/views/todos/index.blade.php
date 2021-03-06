@extends('todos.layout')

@section('content')
<div class="flex justify-center border-b py-4">
    <h1 class="text-2xl">All your Todos</h1>
    <a href="/todos/create" class="mx-5 py-2 px-2 bg-blue-400 cursor-pointer rounded text-white">Create New</a>
</div>

<ul class="pt-4">
    <x-alert />
    @forelse ($todos as $todo)
    <li class="flex justify-between items-center  p-3">
        <div class="flex items-center">
            <span onclick="event.preventDefault(); document.getElementById('completeTodo{{ $todo->id }}').submit();" class="px-2 text-4xl font-black {{ $todo->completed ? 'text-green-400' : 'text-gray-400' }} cursor-pointer">
                &check;
            </span>
            <form action="{{ route('todos.complete', ['todo' => $todo]) }}" id="completeTodo{{ $todo->id }}" class="hidden" method="POST">
                @csrf
                @method('PUT')
            </form>
            <a href="{{ route('todos.show', $todo) }}" class="{{ $todo->completed ? 'line-through' : '' }}">{{ $todo->title }}</a>
        </div>
        <div>
            <a href="{{ route('todos.edit', ['todo' => $todo]) }}" class="mx-5 py-2 px-2 bg-yellow-500 cursor-pointer rounded text-white">Edit</a>
            <span onclick="event.preventDefault(); if(confirm('Do you really want to delete?')) { document.getElementById('deleteTodo{{ $todo->id }}').submit(); }" class="px-2 text-2xl font-black text-red-500 cursor-pointer">
                &cross;
            </span>
            @csrf
            <form action="{{ route('todos.destroy', ['todo' => $todo]) }}" id="deleteTodo{{ $todo->id }}" class="hidden" method="POST">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </li>
    @empty
    <p>No todo available, create one.</p>
    @endforelse
</ul>
@endsection

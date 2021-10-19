@extends('todos.layout')

@section('content')
<h1 class="text-2xl">Update this Todo</h1>
<x-alert />
<form action="/todos/{{ $todo->id }}" method="POST" class="py-5">
    @csrf
    @method('PATCH')
    <input type="text" value="{{ $todo->title }}" name="title" class="py-2 px-2 border rounded">
    <input type="submit" value="Update" class="p-2 border rounded">
</form>

<a href="/todos" class="m-5 p-2 bg-white cursor-pointer rounded border">Back</a>
@endsection

@extends('todos.layout')

@section('content')
<h1 class="text-2xl border-b py-4">What next you need To-Do</h1>
<x-alert />
<form action="{{ route('todos.index') }}" method="POST" class="py-5">
    @csrf
    <input type="text" name="title" class="p-2 border rounded" placeholder="Title">
    <textarea name="description" placeholder="Description" class="block m-auto border rounded my-4 p-2 resize-none"></textarea>
    <input type="submit" value="Create" class="p-2 border rounded">
</form>

<a href="{{ route('todos.index') }}" class="m-5 p-2 bg-white cursor-pointer rounded border">Back</a>
@endsection

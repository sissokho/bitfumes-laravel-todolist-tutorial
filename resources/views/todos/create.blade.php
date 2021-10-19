@extends('todos.layout')

@section('content')
<h1 class="text-2xl border-b py-4">What next you need To-Do</h1>
<x-alert />
<form action="/todos" method="POST" class="py-5">
    @csrf
    <input type="text" name="title" class="py-2 px-2 border rounded">
    <input type="submit" value="Create" class="p-2 border rounded">
</form>

<a href="/todos" class="m-5 p-2 bg-white cursor-pointer rounded border">Back</a>
@endsection

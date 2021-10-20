@extends('todos.layout')

@section('content')
<h1 class="text-2xl border-b py-4">{{ $todo->title }}</h1>
<p class="mb-5 py-3 border-b">{{ $todo->description }}</p>
<a href="{{ route('todos.index') }}" class="m-5 p-2 bg-white cursor-pointer rounded border">Back</a>
@endsection

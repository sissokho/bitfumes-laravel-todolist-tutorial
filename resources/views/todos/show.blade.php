@extends('todos.layout')

@section('content')
<h1 class="text-2xl border-b py-4">{{ $todo->title }}</h1>
<h2 class="text-lg font-black">Description</h2>
<p class="mb-5 py-3 border-b">{{ $todo->description }}</p>
<div class="mb-3">
    <h2 class="text-lg font-black">Steps for this todo</h2>
    @foreach ($todo->steps as $step)
    <p>{{ $step->name }}</p>
    @endforeach
</div>
<a href="{{ route('todos.index') }}" class="m-5 p-2 bg-white cursor-pointer rounded border">Back</a>
@endsection

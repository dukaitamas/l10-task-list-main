@extends('layouts.app')

@section('title', 'The List of tasks')

@section('content')
{{-- <!-- @isset($name)
<div>The name is: {{ $name }}</div> --}}
{{-- @endisset --> --}}
<nav class="mb-4">
    {{-- <a href="{{ route('tasks.create') }}" class="font-medium text-gray-700 underline decoration-pink-500">Add Task!</a> --}}
        <a href="{{ route('tasks.create') }}" class="link">Add Task!</a>
</nav>

<!-- //<div> -->
    {{-- <!-- @if(count($tasks) ) -->♦
    <!-- @foreach($tasks as $task) -->
    <!-- <div>There are tasks!</div> -->
    <!-- <div> {{ $task->title }}</div>
    @endforeach
    @else
    <div>There are no tasks!</div> -->
    <!-- @endif --> --}}
<!-- </div> -->
 @forelse($tasks as $task)
    <div>
         <a href="{{ route('tasks.show',['task'=> $task->id]) }}"
             @class(['line-through'=> $task->completed])>{{ $task->title }}</a>
         {{-- 'id'=> changed to task --}}
        </div>
    @empty
    <div>There are no tasks!</div>
    @endforelse
<!-- //same result as the previous one with if else -->
@if ($tasks->count())
        <nav class="mt-4">{{ $tasks->links() }}</nav>

@endif

@endsection


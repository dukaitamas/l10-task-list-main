@extends('layouts.app')

@section('title', $task->title)

<!-- //ez a content megy a view-ben, ahol a $name változót a view-ben fogja használni ai index.blade.php-ben.
Az app.blade.php -ban van kijelölve az út, hogy a content melyik szekcióba megy a view-ben. -->
@section('content')
    {{-- <!-- <h1>{{ $task->title }}</h1> --> --}}
    <div class="mb-4">
        <a href="{{ route('tasks.index') }}"
        {{-- class="font-medium text-gray-700 underline decoration-pink-500">← Go back to the task list!</a> --}} {{-- app bladeben van a headben a .link class  --}}
         class="link">← Go back to the task list!</a>
    </div>

    <p class="mb-4 text-slate-700"> {{ $task->description }}</p>

    @if ($task->long_description)
        <p class="mb-4 text-slate-700">{{ $task->long_description }}</p>
    @endif

    <p class="mb-4 text-sm text-slate-500">Created{{ $task->created_at->diffForHumans() }} ◌
        Updated{{ $task->updated_at->diffForHumans() }}</p>

    <p class="mb-4">
        @if ($task->completed)
            <span class="font-medium text-green-500">Completed</span>
        @else
            <span class="font-medium text-red-500">Not completed</span>
        @endif
    </p>
    <div class="flex gap-2">
        {{-- flexbox --}}
        <a href="{{ route('tasks.edit', ['task' => $task]) }}" class="btn">Edit</a>
        {{-- in the app.blade i use the button class with @apply in the head  --}}
        {{-- class="rounded-md px-2 py-1 text-center font-medium text-slate-600 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50">Edit</a> --}}
        {{-- rounded-md button medium rounded, px horizontal padding, py vertical padding --}}
        {{-- shadow sm- small shadow, ring-1 = ring width, hover: hover over and change a color to light gray aka slate 50 ;) --}}
        {{-- ring-slate-700/10 means 10% opacity of the 700 --}}

        <form method="POST" action="{{ route('tasks.toggle-complete', ['task' => $task]) }}">
            @csrf
            @method('PUT')
            <button type="submit" class="btn">
                Mark as {{ $task->completed ? 'not completed' : 'completed' }}
            </button>
        </form>

        {{-- <form action="{{ route('tasks.destroy', ['task' => $task])}}" method="POST"> --}}
        <form action="{{ route('tasks.destroy', ['task' => $task]) }}" method="POST">

            @csrf
            @method('DELETE')
            <button type="submit" class="btn">Delete</button>
        </form>
    </div>
@endsection

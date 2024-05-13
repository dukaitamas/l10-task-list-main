@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

{{-- @section('styles')<style>.error-message{
    color:red;
    font-size: 0.8rem;}</style>
@endsection --}}

@section('content')
<form method="POST"
action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) :
route('tasks.store') }}">
 {{-- <form method="POST" action="{{ route('tasks.update', ['id' => $task->id]) }}"> --}} {{-- in html you only can use post and get method!! but if you want to use PUT method there is a laravel method for that
        @method('PUT') you need to use this method to update a record: it is called method spoofing --}}

        @csrf
        @isset($task)
          @method('PUT')
        @endisset
        <div class="mb-4">
        <label for="title">Title</label>
        <input text="text" name="title" id="title"
         @class(['border-red-500' => $errors->has('title')])
        {{-- // 'border-green-500' => !$errors->has('title'), --}}
            {{-- class="border @error('title')border-red-500 @enderror border" --}}
            value="{{ $task->title ?? old('title') }}" />
        @error('title')
            {{-- <p class="error-message">  {{ $message }} </p> --}}
            <p class="error"> {{ $message }} </p>
        @enderror
        </div>

        <div class="mb-4">
            <label for="description"> Description </label>
            <textarea name="description" id="description"
             @class(['border-red-500' => $errors->has('description')])
              rows="5"> {{ $task->description ?? old('description') }}
            </textarea>
            @error('description')
                <p class="error"> {{ $message }} </p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="long_description">Long Description </label>
            <textarea name="long_description" id="long_description"
            @class(['border-red-500' => $errors->has('long_description')])
            rows="10">{{ $task->long_description ?? old('long_description') }}</textarea>
            {{-- // ha nincs kitöltve az egyik mező kiírja ,hogy "the long description filed is required" --}}
            @error('long_description')
                <p class="error"> {{ $message }} </p>
            @enderror
        </div>

        {{-- <div>
            <button type="submit" class="btn"> @isset($task) --}}
        <div class="flex items-center gap-2">
            <button type="submit" class="btn">
                @isset($task)
                    Update Task
                @else
                    Add Task
                @endisset
            </button>
            <a href="{{ route('tasks.index') }}" class="link btn">Cancel</a>
        </div>

    </form>

@endsection

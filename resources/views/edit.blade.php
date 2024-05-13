@extends('layouts.app')

@section('content')
    @include('form', ['task' => $task])
@endsection
{{-- szintén kikommentezve az egész alatta lévő rész, mert ugyanazt tartalmazza mint a form.blade.php --}}

{{-- @section('title','Edit Task')

@section('styles')
<style>
.error-message{
    color:red;
    font-size: 0.8rem;
}

</style>

@endsection

@section('content')
<form method="POST" action="{{ route('tasks.update', ['task' => $task->id]) }}"> --}}

    {{-- <form method="POST" action="{{ route('tasks.update', ['id' => $task->id]) }}"> --}}
        {{-- in html you only can use post and get method!! but if you want to use PUT method there is a laravel method for that
        @method('PUT') you need to use this method to update a record: it is called method spoofing --}}
        {{-- @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input text="text" name="title" id="title" value="{{ $task->title }}"/>
            @error ('title')
                <p class="error-message">  {{ $message }} </p>
            @enderror
        </div>

        <div>
            <label for="description"> Description </label>
            <textarea name="description" id="description" rows="5"> {{ $task->description }}</textarea>
            @error('description')
            <p class="error-message">  {{ $message }} </p>
        @enderror
        </div>

        <div>
            <label for="long_description">Long Description </label>
            <textarea name="long_description" id="long_description" rows="10"> {{$task->long_description}}</textarea>
            @error('long_description')
            <p class="error-message">  {{ $message }} </p>
        @enderror
        </div>

        <div>
            <button type="submit">Edit task </button>
        </div>


    </form>

@endsection --}}


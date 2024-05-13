@extends('layouts.app')

@section('content')
   @include('form')
   @endsection
   {{-- kikommenteztem az egész oldalt mert ugyanazt tartalmazza mint a form.blade.php --}}

{{-- @section('title','Add Task')

@section('styles')
<style>
.error-message{
    color:red;
    font-size: 0.8rem;
}

</style>

@endsection

@section('content') --}}
{{-- {{ $errors }} --}}
{{-- // a {{$errors}} a http://127.0.0.1:8000/tasks/create oldalon ezt írja ki:
{"title":["The title field is required."],"description":["The description field is required."],"long_description":["The long description field is required."]} --}}
    {{-- <form method="POST" action="{{route('tasks.store')}}">
        @csrf --}}

        {{-- //csrf token to protect from csrf attacks --}}
        {{-- always include this to any form by default exceptions can be made in middleware csfr --}}
        {{-- <div>
            <label for="title">Title</label>
            <input text="text" name="title" id="title" value="{{ old('title') }}" /> --}}
            {{-- can be used only for post method and PUT method now, cuz i used it as spoofing in edit.blade. but dont really use it where security needed!!! --}}
            {{-- this keeping the OLD data in the input label field, that is why USE NEVER USE it where passwords or any other
            sensitive info is needed.!! --}}

            {{-- @error ('title')
                <p class="error-message">  {{ $message }} </p>
            @enderror --}}
            {{-- The title field is required. -errormessage in the http://127.0.0.1:8000/tasks/create page under the label --}}
        {{-- </div> --}}

        {{-- <div>
            <label for="description"> Description </label>
            <textarea name="description" id="description" rows="5"> {{ old('description') }} </textarea>
            @error('description')
            <p class="error-message">  {{ $message }} </p>
        @enderror
        </div>

        <div>
            <label for="long_description">Long Description </label>
            <textarea name="long_description" id="long_description" rows="10">   {{ old('long_description') }}</textarea>
            @error('long_description')
            <p class="error-message">  {{ $message }} </p>
        @enderror
        </div>

        <div>
            <button type="submit">Add task </button>
        </div>


    </form> --}}

{{-- @endsection --}}


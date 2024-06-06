@extends('layouts.app')

@section('title', 'Add Task')

@section('content')

    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div>
            <label for="title">
                Title
            </label>
            <input type="text" name="title" id="title" />
        </div>

        <div>
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" rows="5"></textarea>
        </div>

        <div>
            <label for="loong_description">Long Description</label>
            <textarea type="text" name="loong_description" id="loong_description" rows="10"></textarea>
        </div>

        <div>
            <button type="submit">Add Task</button>
        </div>
    </form>
@endsection
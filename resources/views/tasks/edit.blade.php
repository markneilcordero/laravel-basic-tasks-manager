@extends('templates.layout')

@section('title', 'Edit Task')

@section('content')

<form action="{{ route('tasks.update', ['id' => $task->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <table>
        <thead>
            <tr>
                <th colspan="2">Edit Task</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><label for="">Task Title</label></td>
                <td><input type="" name="title" value="{{ $task->title }}"></td>
            </tr>
            <tr>
                <td><label for="">Task Description</label></td>
                <td><input type="" name="description" value="{{ $task->description }}"></td>
            </tr>
        </tbody>
    </table>
    <input type="submit" value="Save Changes">
    <a href="{{ route('tasks.index') }}">Cancel</a>
</form>

@endsection
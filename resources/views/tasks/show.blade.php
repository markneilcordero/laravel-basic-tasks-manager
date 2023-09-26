@extends('templates.layout')

@section('title', 'Single Task')

@section('content')

<form action="" method="">
    <table>
        <thead>
            <tr>
                <td colspan="2">Task Details</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Task</td>
                <td>ID: {{ $task->id }}</td>
            </tr>
            <tr>
                <td>Task</td>
                <td>Title: {{ $task->title }}</td>
            </tr>
            <tr>
                <td>Task</td>
                <td>Description: {{ $task->description }}</td>
            </tr>
        </tbody>
    </table>
</form>
<a href="{{ route('tasks.index') }}">Back to Task List</a>

@endsection
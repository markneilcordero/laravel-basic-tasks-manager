@extends('templates.layout')

@section('title', 'List Task')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Task List</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->title }}</td>
            <td>
                <a href="{{ route('tasks.create') }}">Add New Task</a>
                <a href="{{ route('tasks.show', ['id' => $task->id]) }}">View</a>
                <a href="{{ route('tasks.edit', ['id' => $task->id]) }}">Edit</a>
                <form action="{{ route('tasks.destroy', ['id' => $task->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
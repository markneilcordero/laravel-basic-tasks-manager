@extends('templates.layout')

@section('title', 'Create Task')

@section('content')

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <table>
        <thead>
            <tr>
                <th colspan="2">Create a New Task</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="title" placeholder="Task Title"></td>
                <td><input type="text" name="description" placeholder="Task Description"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Save Task"></td>
            </tr>
        </tbody>
    </table>
</form>

@endsection
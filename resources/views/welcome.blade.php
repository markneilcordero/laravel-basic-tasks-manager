@extends('templates.layout')

@section('title', 'Home')

@section('content')

<a href="{{ route('tasks.index') }}">View Tasks List</a>

@endsection
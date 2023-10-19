@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    <!-- @if(count($tasks)) -->
    @forelse($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}, {{$task->id}}</a>
        </div>
    @empty
        <p>There are no tasks!</p>
    @endforelse
    <!-- @endif -->
@endsection
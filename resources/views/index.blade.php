@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    <div>
        <a href="{{route('tasks.create')}}">Add Task!</a>
    </div>

    @forelse($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}, {{$task->id}}</a>
        </div>
    @empty
        <p>There are no tasks!</p>
    @endforelse

    @if ($tasks->count())
        <nav>
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection
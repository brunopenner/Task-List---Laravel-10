@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    <nav class="mb-4">
        <a href="{{route('tasks.create')}}" class="link">Add Task!</a>
    </nav>

    @forelse($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}" @class(['line-through' => $task->completed])>{{ $task->title }}, {{$task->id}}</a>
        </div>
    @empty
        <p>There are no tasks!</p>
    @endforelse

    @if ($tasks->count())
        <nav class="mb-4">
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection
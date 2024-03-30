@extends('layouts.app')

@section('content')

    <div>
        <h1>Task List</h1>

        @foreach ($tasks as $task)
            <div class="task-item">
                <strong>Name : {{ $task->name }}</strong>
                <p>Description : {{ $task->description }}</p>

                <a href="{{ url('/task/' . $task->id) }}" class="view-link">View</a>
                <a href="{{ url('/task/' . $task->id . '/edit') }}" class="edit-link">Edit</a>

                <form id="delete-form-{{ $task->id }}" action="{{url('/task',[$task->id])}}" method="POST" class="delete-form">
                    @method('delete')
                    @csrf
                    <button type="button" onclick="confirmDelete({{ $task->id }})" class="btn btn-primary">Delete</button>
                </form>

            </div>
        @endforeach
    </div>

    <script>
        function confirmDelete(taskId) {
            if (confirm('Are you sure you want to delete this task?')) {
                document.getElementById('delete-form-' + taskId).submit();
            }
        }
    </script>

@endsection

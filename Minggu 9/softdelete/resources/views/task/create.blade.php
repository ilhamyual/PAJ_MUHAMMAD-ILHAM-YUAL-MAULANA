@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>
            Create new task
        </h1>

        <form method="POST" action="{{url('/task/store')}}">
            @csrf <!--Cross-site request forgary-->

            <label for="name">Name</label>
            <input type="text" name="name" id=""></input>
            <br>
            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
            </br>
            <button type="submit">Create Task</button>
        </form>

        <a href="{{url('/task')}}">Back To Task</a>
    </div>
@endsection
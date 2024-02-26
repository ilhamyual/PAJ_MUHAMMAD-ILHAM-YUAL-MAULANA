<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all(); 
        return view('task.index',compact('tasks')); 
    }
    public function show(Task $task){
        return view('task.show',compact('task')); 
    }
    public function edit(Task $task){
        return view('task.edit', compact('task'));
    }
    
    public function update(UpdateTaskRequest $request, Task $task){
        $task->update($request->validated());
        return redirect('/task');
    }
    

    public function create(){
        return view('task.create');
    }

    public function store(TaskRequest $request){
        $validatedData = $request->validated(); 
        Task::create($validatedData);
        return redirect('/task');
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return TaskResource::collection(Task::with('priority')->get());
    }
    public static function show(Task $task)
    {
        return TaskResource::make($task);
    }
    public static function store(StoreTaskRequest $request)
    {
        $task= Task::create($request->validated());
        $task->load('priority');
        return TaskResource::make($task);
    }
    public static function update(UpdateTaskRequest $request , Task $task){
        $task->update($request->validated());
        return TaskResource::make($task);
    }
    public static function destroy (Task $task){
        $task->delete();
        return response()->noContent();

    }
}

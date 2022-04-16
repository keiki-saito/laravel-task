<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskCreateRequest;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }

    public function create(TaskCreateRequest $taskCreateRequest)
    {
        $task = new Task();
        $task->name = $taskCreateRequest->name;
        $task->save();
        return redirect()->route('index');
    }

    public function delete($taskId)
    {
        $task = Task::find($taskId);
        $task->delete();
        return redirect()->route('index');
    }
}

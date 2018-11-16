<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;


class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks',compact('tasks'));
    }

    public function show(Task $task) // Task::find($id) wildcard
    {
        return view('show',compact('task'));
    }
}

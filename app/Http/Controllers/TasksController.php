<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(): Factory|View|Application
    {
        $tasks = Task::get();
        return view('welcome',compact('tasks'));

    }
    public function show(int $id): Factory|View|Application
    {
        $task = Task::findOrFail($id);
        return view('welcome',compact('task'));

    }
}

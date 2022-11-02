<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeWeb;
use App\Http\Controllers\TasksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', [HomeWeb::class, 'index']);
Route::get('/hellow', [TasksController::class,'index']);
Route::get('/hellow/{task}',  [TasksController::class,'']);
//Route::get('/hellow', function()
//{
//    $tasks = App\Models\Task::incomplete();
////    $tasks= DB::table('tasks')->get();
//    return view('welcome',compact('tasks'));}
//);
//Route::get('/tasks/{task}', function($id)
//{
//    $task= DB::table('tasks')->find($id);
//    dd($task);
//    return view('welcome',compact('tasks'));}
//);

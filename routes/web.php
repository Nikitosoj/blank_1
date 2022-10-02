<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeWeb;

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

Route::get('/', [HomeWeb::class, 'index']);

Route::get('/hellow', function()
{
    $tasks= DB::table('tasks')->get();
    return view('welcome',compact('tasks'));}
);
Route::get('/tasks/{task}', function($id)
{
    $task= DB::table('tasks')->find($id);
    dd($task);
    return view('welcome',compact('tasks'));}
);

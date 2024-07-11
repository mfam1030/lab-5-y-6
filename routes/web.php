<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('tasks', TaskController::class);

Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/create', [TaskController::class, 'create']);
Route::get('/tasks/{task}', [TaskController::class, 'show']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit']);
Route::put('/tasks/{task}', [TaskController::class, 'update']);

Route::resource('tasks', TaskController::class);
Route::patch('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
Route::resource('tasks', TaskController::class);


Route::patch('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');

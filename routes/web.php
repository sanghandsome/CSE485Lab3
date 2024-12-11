<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
Route::get('/', function () {
    return view('task\App');
});
Route::resource('tasks', TaskController::class);

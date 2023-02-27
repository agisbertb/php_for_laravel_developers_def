<?php

use App\Models\TaskP;
use Illuminate\Support\Facades\Route;

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

// HTTP -> REQUEST METHOD
Route::get('/', function () {
    return view('tasks',[
        'tasks'=> TaskP::all()
    ]);
});

Route::get('/tasks', function () {
    return view('tasks',[
        'tasks'=>[]
    ]);
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

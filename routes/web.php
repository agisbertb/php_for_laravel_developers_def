<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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
Route::get('/',[TaskController::class,'index']);

Route::get('/tasks',[TaskController::class,'index']);

Route::get('/users',[UserController::class,'index']);

Route::get('/contact',[PagesController::class,'contact']);

Route::get('/about',[PagesController::class,'about']);

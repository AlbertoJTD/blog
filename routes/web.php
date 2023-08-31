<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/course/{course}', [CourseController::class, 'show']);
Route::get('/courses/create', [CourseController::class, 'create']);

// Route::resource('courses', CourseController::class)->only(['index', 'show', 'create']);
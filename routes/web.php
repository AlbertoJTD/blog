<?php

use App\Http\Controllers\ContactController;
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
})->name('home');

// Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
// Route::get('/courses/create', [CourseController::class, 'create'])->name('course.create');
// Route::get('/courses/{course}', [CourseController::class, 'show'])->name('course.show');
// Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
// Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
// Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
// Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');
Route::resource('courses', CourseController::class);

Route::view('about_us', 'aboutus')->name('about_us');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

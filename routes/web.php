<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/create', function(){
    return view('courses.create');
})->name('courses.create');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::post('/courses/{course}/toggle', [CourseController::class, 'toggle'])->name('courses.toggle');
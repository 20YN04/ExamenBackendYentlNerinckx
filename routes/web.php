<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', [Coursecontroller::class, 'index'])->name('courses.index');
Route::get('/courses/create', function(){
    return view('courses.create');

})->name('courses.create');
Route::post('/courses', [Coursecontroller::class, 'store'])->name('courses.store');
Route::post('courses/{course}/toggle', [CourseController::class, 'toggle'])->name('courses.toggle');


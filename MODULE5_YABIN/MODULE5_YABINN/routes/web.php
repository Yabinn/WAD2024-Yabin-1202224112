<?php

use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;

// Lecturer Routes
Route::resource('lecturers', LecturerController::class);

// Student Routes
Route::resource('students', StudentController::class);

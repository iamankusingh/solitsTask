<?php

use App\Http\Controllers\AddStudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [AddStudentController::class, 'GetStudent']);

Route::post('/addstudent', [AddStudentController::class, 'AddStudent']);

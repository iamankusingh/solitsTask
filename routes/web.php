<?php

use App\Http\Controllers\AddStudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [AddStudentController::class, 'GetStudent']);

Route::post('/addstudent', [AddStudentController::class, 'AddStudent']);

Route::get('/student/{student}/edit', [AddStudentController::class, 'edit']);
Route::put('/student/{student}', [AddStudentController::class, 'update']);

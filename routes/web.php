<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StudentController::class,'home']);
Route::get('/students', [StudentController::class,'index']);
Route::post('/students', [StudentController::class,'store']); 
// Route::get('/students/{student}', [StudentController::class,'show']);
Route::get('/students/edit/{student}', [StudentController::class,'edit']);
Route::put('/students/update/{student}', [StudentController::class,'update']);
Route::delete('/students/delete/{student}', [StudentController::class,'destroy']);



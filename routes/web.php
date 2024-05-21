<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [StudentController::class, "index"]);
Route::post('/store', [StudentController::class, "store"]);
Route::get('/details/{student}', [StudentController::class, 'getDataByID']);

Route::get('/delete/{student}', [StudentController::class, 'destroy']);
Route::get('/update/{student}', [StudentController::class, 'edit']);
Route::post('/update/{student}/edit', [StudentController::class, 'update']);

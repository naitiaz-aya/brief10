<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/create', [App\Http\Controllers\QuestionController::class, 'create'])->name('addQuestion')->middleware('auth');
Route::get('/', [App\Http\Controllers\QuestionController::class, 'index'])->name('questions');
Route::get('/questions', [App\Http\Controllers\QuestionController::class, 'index'])->name('questions');
Route::get('/questions/{id}', [App\Http\Controllers\QuestionController::class, 'show'])->name('showQuestion');
Route::get('/myquestions', [App\Http\Controllers\QuestionController::class, 'selfIndex'])->name('myQuestions')->middleware('auth');
Route::post('/questions', [App\Http\Controllers\QuestionController::class, 'store'])->name('storeQuestion')->middleware('auth');
Route::delete('/questions/{id}', [App\Http\Controllers\QuestionController::class, 'destroy'])->name('deleteQuestion')->middleware('auth');

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('editUser')->middleware('auth');
Route::put('/user/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('updateUser')->middleware('auth');
Route::delete('/users/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('deleteUser')->middleware('auth');

Route::post('/responses', [App\Http\Controllers\ResponseController::class, 'store'])->name('storeResponse')->middleware('auth');
Route::delete('/responses/{id}', [App\Http\Controllers\ResponseController::class, 'destroy'])->name('deleteResponse')->middleware('auth');
Route::get('/myresponses', [App\Http\Controllers\ResponseController::class, 'selfIndex'])->name('myResponses')->middleware('auth');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myProjectController;

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
    return view('home');
});

Route::get('/', [myProjectController::class, 'index']);
Route::get('/about', [myProjectController::class, 'index']);
Route::get('/experience', [myProjectController::class, 'experience']);
Route::get('/education', [myProjectController::class, 'education']);
Route::get('/skills', [myProjectController::class, 'skills']);
Route::get('/interests', [myProjectController::class, 'interests']);


Route::get('/contact', [myProjectController::class, 'contact']);
Route::post('/contact', [myProjectController::class, 'formContact']);







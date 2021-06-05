<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'App\Http\Controllers\HomeController@index');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::resource('admin/characters', App\Http\Controllers\CharacterController::class);
Route::resource('admin/comics', App\Http\Controllers\ComicController::class);
Route::resource('admin/comics-characters', App\Http\Controllers\ComicsCharacterController::class);
Route::resource('admin/comics-events', App\Http\Controllers\ComicsEventController::class);
Route::resource('admin/comics-users', App\Http\Controllers\ComicsUserController::class);
Route::resource('admin/creators', App\Http\Controllers\CreatorController::class);
Route::resource('admin/events', App\Http\Controllers\EventController::class);
Route::resource('admin/series', App\Http\Controllers\SeriesController::class);
Route::resource('admin/users', App\Http\Controllers\UserController::class);

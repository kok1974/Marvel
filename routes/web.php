<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ComictecaController;
use App\Models\Comic;
use App\Models\User;

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

// abierta para la app
Route::delete('admin/comicusers/{id}/{userid}', function ($id,$userid) {
    $comics = Comic::find($id);
    $comics->users()->detach($userid);

    return redirect()->route('comics-users.index')->with('success', 'ComicsUser deleted successfully');
})->name('comics-users.borra');

Route::delete('admin/comiccharacter/{id}/{characterid}', function ($id,$characterid) {
    $comics = Comic::find($id);
    $comics->characters()->detach($characterid);

    return redirect()->route('comics-characters.index')->with('success', 'ComicsCharacter deleted successfully');
})->name('comics-characters.borra')->middleware('administracion');

Route::delete('admin/comicevents/{id}/{eventid}', function ($id,$eventid) {
    $comics = Comic::find($id);
    $comics->events()->detach($eventid);

    return redirect()->route('comics-events.index')->with('success', 'ComicsEvents deleted successfully');
})->name('comics-events.borra')->middleware('administracion');

Route::resource('admin/characters', App\Http\Controllers\CharacterController::class)->middleware('administracion');
Route::resource('admin/comics', App\Http\Controllers\ComicController::class)->middleware('administracion');
Route::resource('admin/comics-characters', App\Http\Controllers\ComicsCharacterController::class)->middleware('administracion');
Route::resource('admin/comics-events', App\Http\Controllers\ComicsEventController::class)->middleware('administracion');
Route::resource('admin/comics-users', App\Http\Controllers\ComicsUserController::class)->middleware('administracion');
Route::resource('admin/creators', App\Http\Controllers\CreatorController::class)->middleware('administracion');
Route::resource('admin/events', App\Http\Controllers\EventController::class)->middleware('administracion');
Route::resource('admin/series', App\Http\Controllers\SeriesController::class)->middleware('administracion');
Route::resource('admin/users', App\Http\Controllers\UserController::class)->middleware('administracion');

Route::get('comiteca/autores', [ComictecaController::class ,'autores']);
Route::get('comiteca/autor/{id}', [ComictecaController::class ,'autor']);
Route::get('comiteca/eventos', [ComictecaController::class ,'eventos']);
Route::get('comiteca/evento/{id}', [ComictecaController::class ,'evento']);
Route::get('comiteca/series', [ComictecaController::class ,'series']);
Route::get('comiteca/serie/{id}', [ComictecaController::class ,'serie']);
Route::get('comiteca/personajes', [ComictecaController::class ,'personajes']);
Route::get('comiteca/personaje/{id}', [ComictecaController::class ,'personaje']);
Route::get('comiteca/comic/{id}', [ComictecaController::class ,'comic']);

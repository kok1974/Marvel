<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::delete('admin/comicusers/{id}/{userid}', function ($id,$userid) {
    $comics = Comic::find($id);
    $comics->users()->detach($userid);

    return redirect()->route('comics-users.index')->with('success', 'ComicsUser deleted successfully');
})->name('comics-users.borra');

Route::delete('admin/comiccharacter/{id}/{characterid}', function ($id,$characterid) {
    $comics = Comic::find($id);
    $comics->characters()->detach($characterid);

    return redirect()->route('comics-characters.index')->with('success', 'ComicsCharacter deleted successfully');
})->name('comics-characters.borra');

Route::delete('admin/comicevents/{id}/{eventid}', function ($id,$eventid) {
    $comics = Comic::find($id);
    $comics->events()->detach($eventid);

    return redirect()->route('comics-events.index')->with('success', 'ComicsEvents deleted successfully');
})->name('comics-events.borra');

Route::resource('admin/characters', App\Http\Controllers\CharacterController::class);
Route::resource('admin/comics', App\Http\Controllers\ComicController::class);
Route::resource('admin/comics-characters', App\Http\Controllers\ComicsCharacterController::class);
Route::resource('admin/comics-events', App\Http\Controllers\ComicsEventController::class);
Route::resource('admin/comics-users', App\Http\Controllers\ComicsUserController::class);
Route::resource('admin/creators', App\Http\Controllers\CreatorController::class);
Route::resource('admin/events', App\Http\Controllers\EventController::class);
Route::resource('admin/series', App\Http\Controllers\SeriesController::class);
Route::resource('admin/users', App\Http\Controllers\UserController::class);

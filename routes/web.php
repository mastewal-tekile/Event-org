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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('organizers', \App\Http\Controllers\OrganizerController::class)->middleware(['auth']);
Route::resource('events', \App\Http\Controllers\EventController::class)->middleware(['auth']);
Route::get(
    'organizers/events/create/{id}',
    [\App\Http\Controllers\OrganizerController::class, 'create_event'])->name('organizers.event.create');
Route::get('/tickets', function () {
    return view('tickets');
})->middleware(['auth'])->name('tickets');

require __DIR__.'/auth.php';

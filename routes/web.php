<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\EventController;
use App\Models\Event;

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
    return view('welcome')->name('welcome');
});

//display
Route::get('/displays/create', [DisplayController::class, 'create'])->name('displays.create')->middleware('auth');
Route::post('/displays', [DisplayController::class, 'store'])->name('displays.store')->middleware('auth');

//rooms
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index')->middleware('auth');
Route::get('/rooms/{room}', [RoomController::class, 'show'])->name('rooms.show')->middleware('auth');

//events
Route::get('/rooms/room/{event}', [EventController::class, 'show'])->name('events.show')->middleware('auth');
Route::get('/rooms/room/event/create', [EventController::class, 'create'])->name('events.create')->middleware('auth');
Route::post('/rooms/room/event', [EventController::class, 'store'])->name('events.store')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

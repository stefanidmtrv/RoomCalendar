<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\EventController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

//display
Route::get('/displays/create', [DisplayController::class, 'create'])->name('displays.create')->middleware('auth');
Route::post('/displays', [DisplayController::class, 'store'])->name('displays.store');


//rooms
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index')->middleware('auth');
Route::get('/rooms/{room}', [RoomController::class, 'show'])->name('rooms.show');

//events
Route::get('/rooms/room/{event}', [EventController::class, 'show'])->name('events.show');
Route::get('/rooms/room/event/create/{slot1}/{slot2}/{date}', [EventController::class, 'create'])->name('events.create');
Route::post('/rooms/room/event', [EventController::class, 'store'])->name('events.store');


require __DIR__.'/auth.php';

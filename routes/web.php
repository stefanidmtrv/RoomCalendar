<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\EventController;
use App\Models\Room;

require __DIR__.'/auth.php';


Route::get('/', [RoomController::class, 'index2'])->name('home');
Route::get('/availability/{room}', [RoomController::class, 'showAvailability'])->name('availability');

//admin
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/displays/create', [DisplayController::class, 'create'])->name('displays.create');
    Route::get('admin/rooms', [RoomController::class, 'index'])->name('rooms.index')->middleware('role:admin');
    Route::delete('rooms/{room}', [RoomController::class, 'destroy'])->name('rooms.destroy')->middleware('role:admin');
    Route::delete('rooms/room/{event}', [EventController::class, 'destroy'])->name('events.destroy')->middleware('role:admin');
    Route::get('rooms/pins', [RoomController::class, 'showPins'])->name('rooms.pins');

});

//display
Route::post('/displays', [DisplayController::class, 'store'])->name('displays.store');

//rooms
Route::get('/rooms/{room}', [RoomController::class, 'show'])->name('rooms.show');
Route::get('/rooms/pin', [RoomController::class, 'pinInit'])->name('rooms.pin');
Route::post('/rooms/pin', [RoomController::class, 'pinCheck'])->name('rooms.pin');
Route::post('/rooms/pin-store', [RoomController::class, 'pinStore'])->name('pin.store');


//events
Route::get('/rooms/room/{event}', [EventController::class, 'show'])->name('events.show');
Route::get('/rooms/room/event/create/{slot1}/{slot2}/{date}/{roomid}', [EventController::class, 'create'])->name('events.create');
Route::post('/rooms/room/event', [EventController::class, 'store'])->name('events.store');

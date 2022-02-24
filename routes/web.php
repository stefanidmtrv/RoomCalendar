<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DisplayController;
use App\Http\Controllers\Backend\FloorController;
use App\Http\Controllers\Backend\BuildingController;
use App\Http\Controllers\Backend\StudentManagement;
use App\Http\Controllers\Backend\RoomsController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\RoomController;


use App\Models\Room;

require __DIR__ . '/auth.php';



Route::namespace('Backend')->prefix('admin')->name('admin.')->group(function () {
    Route::group(['middleware' => ['role:admin']], function () {

        //admin
        //stmngm
        Route::get('stmgmt', [StudentManagement::class, 'show'])->name('stmgmt');
        Route::get('stmgmt/create', [StudentManagement::class, 'showCreate'])->name('stmgmt.create');
        Route::post('stmgmt/store', [StudentManagement::class, 'store'])->name('stmgmt.store');
        Route::get('stmgmt/delete/{id}', [StudentManagement::class, 'delete'])->name('stmgmt.delete');
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        //Building management
        Route::get('building', [BuildingController::class, 'show'])->name('building');
        Route::get('building/create', [BuildingController::class, 'showCreate'])->name('building.create');
        Route::post('building/store', [BuildingController::class, 'store'])->name('building.store');
        Route::get('building/delete/{id}', [BuildingController::class, 'delete'])->name('building.delete');

        //Floor management
        Route::get('floor', [FloorController::class, 'show'])->name('floor');
        Route::get('floor/create', [FloorController::class, 'showCreate'])->name('floor.create');
        Route::post('floor/store', [FloorController::class, 'store'])->name('floor.store');
        Route::get('floor/delete/{id}', [FloorController::class, 'delete'])->name('floor.delete');

        //Room management
        Route::get('room', [RoomsController::class, 'show'])->name('room');
        Route::get('room/create', [RoomsController::class, 'showCreate'])->name('room.create');
        Route::post('room/store', [RoomsController::class, 'store'])->name('room.store');
        Route::get('room/delete/{id}', [RoomsController::class, 'delete'])->name('room.delete');
    });
});

//frontend
Route::namespace('Frontend')->group(function () {
    Route::get('/', [RoomController::class, 'index2'])->name('home');
    Route::get('/availability/{room}', [RoomController::class, 'showAvailability'])->name('availability');

    Route::get('/displays/create', [DisplayController::class, 'create'])->name('displays.create');
    Route::get('admin/rooms', [RoomController::class, 'index'])->name('rooms.index')->middleware('role:admin');
    Route::delete('rooms/{room}', [RoomController::class, 'destroy'])->name('rooms.destroy')->middleware('role:admin');
    Route::delete('rooms/room/{event}', [EventController::class, 'destroy'])->name('events.destroy')->middleware('role:admin');
    Route::get('rooms/pins', [RoomController::class, 'showPins'])->name('rooms.pins');

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
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DisplayController;
use App\Http\Controllers\Backend\FloorController;
use App\Http\Controllers\Backend\BuildingController;
use App\Http\Controllers\Backend\StudentManagement;
use App\Http\Controllers\Backend\RoomsController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Backend\BackEventController;
use App\Models\Room;

require __DIR__ . '/auth.php';



Route::namespace('Backend')->prefix('admin')->name('admin.')->group(function () {
    Route::group(['middleware' => ['role:admin']], function () {

        //admin
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        //stmngm
        Route::get('stmgmt', [StudentManagement::class, 'show'])->name('stmgmt');
        Route::get('stmgmt/create', [StudentManagement::class, 'showCreate'])->name('stmgmt.create');
        Route::post('stmgmt/store', [StudentManagement::class, 'store'])->name('stmgmt.store');
        Route::get('stmgmt/delete/{id}', [StudentManagement::class, 'delete'])->name('stmgmt.delete');
        Route::get('stmgmt/edit/{id}', [StudentManagement::class, 'edit'])->name('stmgmt.edit');
        Route::put('stmgmt/{id}', [StudentManagement::class, 'update'])->name('stmgmt.update');

        //Building management
        Route::get('building', [BuildingController::class, 'show'])->name('building');
        Route::get('building/create', [BuildingController::class, 'showCreate'])->name('building.create');
        Route::post('building/store', [BuildingController::class, 'store'])->name('building.store');
        Route::get('building/delete/{id}', [BuildingController::class, 'delete'])->name('building.delete');
        Route::get('building/edit/{id}', [BuildingController::class, 'edit'])->name('building.edit');
        Route::put('building/{id}', [BuildingController::class, 'update'])->name('building.update');

        //Floor management
        Route::get('floor', [FloorController::class, 'show'])->name('floor');
        Route::get('floor/create', [FloorController::class, 'showCreate'])->name('floor.create');
        Route::post('floor/store', [FloorController::class, 'store'])->name('floor.store');
        Route::get('floor/delete/{id}', [FloorController::class, 'delete'])->name('floor.delete');
        Route::get('floor/edit/{id}', [FloorController::class, 'edit'])->name('floor.edit');
        Route::put('floor/{id}', [FloorController::class, 'update'])->name('floor.update');

        //Room management
        Route::get('room', [RoomsController::class, 'show'])->name('room');
        Route::get('room/create', [RoomsController::class, 'showCreate'])->name('room.create');
        Route::post('room/store', [RoomsController::class, 'store'])->name('room.store');
        Route::get('room/delete/{id}', [RoomsController::class, 'delete'])->name('room.delete');
        Route::get('room/edit/{id}', [RoomsController::class, 'edit'])->name('room.edit');
        Route::put('room/{id}', [RoomsController::class, 'update'])->name('room.update');

        //Event management
        Route::get('event', [BackEventController::class, 'show'])->name('event');
        Route::get('event/create', [BackEventController::class, 'showCreate'])->name('event.create');
        Route::post('event/store', [BackEventController::class, 'store'])->name('event.store');
        Route::get('event/delete/{id}', [BackEventController::class, 'delete'])->name('event.delete');
        Route::get('event/edit/{id}', [BackEventController::class, 'edit'])->name('event.edit');
        Route::put('event/{id}', [BackEventController::class, 'update'])->name('event.update');
    });
});

//frontend
Route::namespace('Frontend')->group(function () {
    Route::get('/', [FrontController::class, 'rooms'])->name('home');
    Route::get('rooms', [FrontController::class, 'rooms'])->name('rooms');
    Route::get('/availability/{room}', [FrontController::class, 'showAvailability'])->name('availability');
    Route::get('/rooms/{room}', [FrontController::class, 'show'])->name('rooms.show');
    Route::get('/rooms/pin', [FrontController::class, 'pinInit'])->name('rooms.pin');
    Route::post('/rooms/pin', [FrontController::class, 'pinCheck'])->name('rooms.pin');
    Route::post('/rooms/pin-store', [FrontController::class, 'pinStore'])->name('pin.store');
    
    //?
    Route::get('user/event/delete/{id}', [BackEventController::class, 'delete'])->name('user.event.delete');

    //frontend event
    Route::get('/rooms/room/{event}', [EventController::class, 'show'])->name('events.show');
    Route::get('/rooms/room/event/create/{slot1}/{slot2}/{date}/{roomid}', [EventController::class, 'create'])->name('events.create');
    Route::post('/rooms/room/event', [EventController::class, 'store'])->name('events.store');
});

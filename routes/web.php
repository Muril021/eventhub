<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [
  EventController::class,
  'index',
]);

Route::prefix('/')->group(function () {
  Route::get('/dashboard', [
    EventController::class,
    'dashboard',
  ]);

  Route::prefix('/events')
    ->group(function () {
      Route::get('/create', [
        EventController::class,
        'create',
      ]);

      Route::get('/edit/{id}', [
        EventController::class,
        'edit'
      ]);

      Route::post('', [
        EventController::class,
        'store',
      ]);

      Route::put('/update/{id}', [
        EventController::class,
        'update',
      ]);

      Route::delete('/{id}', [
        EventController::class,
        'destroy',
      ]);

      Route::post('/join/{id}', [
        EventController::class,
        'joinEvent',
      ]);

      Route::delete('/leave/{id}', [
        EventController::class,
        'leaveEvent',
      ]);
  });
})
->middleware('auth');

Route::get('/events/{id}', [
  EventController::class,
  'show',
]);

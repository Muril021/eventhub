<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

/* Route::get('/produtos', function(){
  $search = request('search');
  return view('products', ['search' => $search]);
});

Route::get('/produtos_teste/{id?}', function($id = null){
  return view('product', ['id' => $id]);
}); */

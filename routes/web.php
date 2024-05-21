<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  $welcome = 'Bem-vindo!';

  return view('welcome', ['welcome' => $welcome]);
});

/* Route::get('/produtos', function(){
  $search = request('search');
  return view('products', ['search' => $search]);
});

Route::get('/produtos_teste/{id?}', function($id = null){
  return view('product', ['id' => $id]);
}); */

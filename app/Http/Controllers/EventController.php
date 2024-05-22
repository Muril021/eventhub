<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
  public function index()
  {
    $welcome = 'Bem-vindo!';
    return view('welcome', ['welcome' => $welcome]);
  }

  public function create()
  {
    return view('events.create');
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
  public function hello(){
    $title = 'Laravel 5.4.26';
    $subtitle = 'This is subtitle';
    return view('hello.index')
    ->withTitle($title)
    ->withSubtitle($subtitle);
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class MyController extends Controller
{
  public function hello(){
    $title = 'Laravel 5.4.26';
    $subtitle = 'This is subtitle';
    return view('hello.index')
    ->withTitle($title)
    ->withSubtitle($subtitle);
  }

  public function index () {
    return view('index');
  }

  public function clearCache () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return "CACHE CLEARED, VIEW CLEARED, CACHE CONFIGED.";
  }

  public function welcome () {
    return view('welcome');
  }

  public function reset () {
    return view('reset');
  }

  public function comment () {
    return view('reset');
  }

  public function docviews () {
    return view('reset');
  }

  public function downloadFileAN () {
    $filepath = public_path('adhoc/AN/')."AN01.docx";
    return response()->download($filepath);
  }
}

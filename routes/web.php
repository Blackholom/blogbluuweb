<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('gallery', function () {
  return view('gallery');
})->name('gallery');

Route::get('blog', function () {
  return view('blog');
})->name('blog');


Route::get('aboutus/{name?}', function ($name = null) {
  $team = ['Kevin', 'Wilman', 'Mario'];
//  return view('aboutus', ['team' => $team]);
  return view('aboutus', compact('team'));
})->name('aboutus');

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

/**
 * Route to each apps
 * 
 * The name must corespond to folder in ressources/apps
 */
Route::get('/', function () {
    return view('app', ['name' => 'Home']);
})->name('home');

Route::get('/about', function () {
    return view('app', ['name' => 'Json']);
})->name('about');

Route::get('/login', function () {
    return view('app', ['name' => 'Json']);
})->name('login');

Route::get('/json', function () {
    return view('app', ['name' => 'Json']);
});



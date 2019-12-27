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
 * Auth routes
 * 
 * I may need to make then myself
 */

Route::get('/login', function () {
    return view('app', ['name' => 'Json']);
})->name('login');

/**
 * Apps routes
 * 
 * The name must corespond to folder in ressources/apps
 */
Route::get('/', function () {
    return view('app', ['name' => 'Portfolio']);
})->name('home');

Route::get('/about', function () {
    return view('app', ['name' => 'Json']);
})->name('about');

Route::get('/json', function () {
    return view('app', ['name' => 'Json']);
});
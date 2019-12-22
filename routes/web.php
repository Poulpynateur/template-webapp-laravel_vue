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

// TODO : add a system that link VueJS app to the good URL (hard coded ?), like foreach folder in ressources/sub
/**
 * Also for the Blade view :
 * - Link to the general style and JavaScript files         -> "ressource/global"
 * - A dynamic path to the specific style and javascript    -> "ressource/sub/x"
 */

Route::get('/', function () {
    return view('welcome', ['name' => 'Welcome', 'path' => '']);
});

Route::get('/json', 'json\HomeController@show');
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
Route::get('/', function() {return redirect()->to("/landing");});
Route::get('/landing', 'PageViewController@viewLanding');
Route::get('/about', 'PageViewController@viewAbout');
Route::get('/terms-and-conditions', 'PageViewController@viewTOC');
Route::get('/contact', 'PageViewController@viewContact');

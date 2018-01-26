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
Route::get('/spot', function (){
    return view('welcome');
});
Route::get('/activite', function (){
    return view('activite');
});
Route::get('/contact', function (){
    return view('contact');
});
Route::get('/event', function (){
    return view('event');
});
Route::get('/galerie', function (){
    return view('galerie');
});
Route::get('/restauration', function (){
    return view('restauration');
});
Route::get('/tarif', function (){
    return view('tarif');
});


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
    $name_page = "Le spot";
    return view('welcome', ['name_page' => $name_page]);
});
Route::get('/spot', function (){
    $name_page = "Le spot";
    return view('welcome', ['name_page' => $name_page]);
});
Route::get('/activite', function (){
    $name_page = "les activités";
    return view('activite', ['name_page' => $name_page]);
});
Route::get('/contact', function (){
    $name_page = "Contact";
    return view('contact', ['name_page' => $name_page]);
});

Route::get('/event', 'EventController@init');


Route::get('/galerie', function (){
    $name_page = "Galerie";
    return view('galerie', ['name_page' => $name_page]);
});
Route::get('/restauration', function (){
    $name_page = "La restauration";
    return view('restauration', ['name_page' => $name_page]);
});
Route::get('/tarif', function (){
    $name_page = "Les tarif";
    return view('tarif', ['name_page' => $name_page]);
});


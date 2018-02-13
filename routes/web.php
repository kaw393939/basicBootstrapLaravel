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
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', function () {
    //dd will die (quit) and dump the data.
    //dd(request());

    //gets data from form
    $data = request()->all();

    echo $data['email_'] . '<br>';
    echo $data['message'];



});


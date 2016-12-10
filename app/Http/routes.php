<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/adminMaintenance', function () {
    return view('adminMaintenance');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/category', function () {
    return view('addCategory');
});

Route::get('/question', function () {
    return view('addQuestion');
});


Route::post('/registration/create', 'UserController@create');

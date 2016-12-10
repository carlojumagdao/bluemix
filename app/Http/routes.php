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

Route::get('/addCategory', function () {
    return view('addCategory');
});

Route::get('/addQuestion', function () {
    return view('addQuestion');
});

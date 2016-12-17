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
    return view('home');
});


Route::get('/adminMaintenance', function () {
    return view('adminMaintenance');
});

Route::get('/registration', function () {
    return view('registration');
});

// Route::get('/category', function () {
//     return view('addCategory');
// });

Route::get('/dashboard', function () {
    return view('adminDashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/game', function () {
    return view('game');
});

Route::get('/index', function () {
    return view('index');
});


Route::post('/registration/create', 'UserController@create');
Route::post('/category/create', 'CategoryController@create');
Route::post('/question/create', 'QuestionController@create');
Route::post('/event/create', 'EventController@create');
Route::post('/comment/create', 'CommentController@create');
Route::post('/score/create', 'ScoreController@create');
Route::post('/login/check', 'LoginController@check');
Route::post('/games/readanswer', 'GameController@readanswer');


Route::get('/event', 'EventController@home');
Route::get('/question', 'QuestionController@index');
Route::get('/logout', 'LoginController@logout');
Route::get('/comments', 'CommentController@index');
Route::get('/categories', 'CategoryController@getCategories');
Route::get('/category', 'CategoryController@index');
Route::get('/events', 'EventController@index');
Route::get('/seteventid', 'GameController@setEventID');
Route::get('/games', 'GameController@index');
Route::get('/users', 'UserController@index');







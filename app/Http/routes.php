<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/profile/{name}', 'HomeController@showProfile');


    Route::get('/todo', 'ToDoController@index');
    Route::get('/todo/{todos}', 'ToDoController@show');
    Route::get('/notes/{note}/edit', 'NotesController@edit');

    Route::patch('notes/{note}', 'NotesController@update');

    Route::get('todo/{todo}/delete', 'ToDoController@delete');
    Route::get('/notes/{note}/delete', 'NotesController@delete');

    Route::post('/todo/new', 'ToDoController@store');
    Route::post('/todo/{todos}/notes', 'NotesController@store');
});

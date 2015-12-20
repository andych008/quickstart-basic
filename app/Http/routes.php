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

use App\Task;

/**
 * Show Task Dashboard
 */
Route::get('/mydata', function () {
//    return view('mydatas');
	$task = Task::all();
    print $task;
});

/**
 * Show Task Dashboard
 */
Route::get('/taskByName/{id}', function ($id) {
    $task = Task::findOrFail($id);
    print $task;
});

/**
 * Show Task Dashboard
 */
Route::get('/demo1/{name}', function ($name) {
    return view('demo1', [
        'name' => $name,
        'htmlData' => '<div><font color="red">我是htmlData</font></div>'
    ]);
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
    'password' => 'Auth\PasswordController',
]);

/**
 * Show Task Dashboard
 */
Route::get('/','TaskController@index');

/**
 * Show Task Dashboard
 */
Route::get('/task/{id}', 'TaskController@show');


/**
 * Add New Task
 */
Route::post('/task', 'TaskController@store');

/**
 * Delete Task
 */
Route::delete('/task/{id}', 'TaskController@destroy');

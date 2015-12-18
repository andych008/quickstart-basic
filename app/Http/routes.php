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
use Illuminate\Http\Request;

/**
 * Show Task Dashboard
 */
Route::get('/', function () {
    return view('tasks', [
    	'tasks' => Task::orderBy('created_at', 'asc')->get()
    ]);
});

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
Route::get('/task/{id}', function ($id) {
	$task = App\Task::findOrNew($id);
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


/**
 * Add New Task
 */
Route::post('/task', function (Request $request) {
	$validator = Validator::make($request->all(), [
		'name' => 'required|max:255',
	]);

	if ($validator->fails()) {
		return redirect('/')
			->withInput()
			->withErrors($validator);
	}

	$task = new Task;
	$task->name = $request->name;
	$task->save();

	return redirect('/');
});


/**
 * Delete Task
 */
Route::delete('/task/{id}', function ($id) {
	Task::findOrFail($id)->delete();

	return redirect('/');
});

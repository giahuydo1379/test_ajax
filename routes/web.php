<?php

use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     $tasks = App\Task::all();
 
//     return View::make('welcome')->with('tasks', $tasks);
// });

// Route::get('/tasks/{task_id?}', function ($task_id) {
//     $task = App\Task::find($task_id);

//     return Response::json($task);
// });

// Route::post('/tasks', function (Request $request) {
//     $task = App\Task::create($request->all());

//     return Response::json($task);
// });


// Route::put('/tasks/{task_id?}', function (Request $request, $task_id) {
//     $task = App\Task::find($task_id);

//     $task->task = $request->task;
//     $task->description = $request->description;

//     $task->save();

//     return Response::json($task);
// });

// Route::delete('/tasks/{task_id?}', function ($task_id) {
//     $task = App\Task::destroy($task_id);

//     return Response::json($task);
// });

Route::get('/', 'TasksController@index');
Route::get('/tasks/{task_id?}', 'TasksController@show');
Route::post('/tasks', 'TasksController@store');
Route::put('/tasks/{task_id?}', 'TasksController@update');
Route::delete('/tasks/{task_id?}', 'TasksController@destroy');


Route::get('/test', function () {
    return view('view');
});

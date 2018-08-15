<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

use Illuminate\Http\Response;
use Illuminate\Validation\Validator;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();

        return view('welcome')->with('tasks', $tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'email' => 'required|email']);
//         $validator = Validator::make($request->all(),
//     [ 'email' => 'required|email']
// );

// if ($validator->fails())
// {
//     return $this->dispatch(new MakeResponse([
//         "error" => "Validation Errors",
//         "validation-errors" => $validator->errors()
//     ], 422));
// }

        $task = Task::create($request->all());

        return Response()->json($task);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($task_id)
    {
        $task = Task::find($task_id);
        return response()->json($task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($task_id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $task_id)
    {
        $task = Task::find($task_id);

        $task->task = $request->task;
        $task->description = $request->description;
        $task->email = $request->email;

        $task->save();
        return response()->json($task);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($task_id)
    {
        $task = Task::destroy($task_id);

        return response()->json($task);
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Task;
use App\Models\AssignedTask;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Label;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $created = Task::create([
        'project_id'=>1,
       'task_name'=>$request->task_name,
       'description'=>$request->description,
       'other_info'=>$request->other_info,
       'task_limit'=>$request->task_limit,
       'assigned_by'=>Auth::user()->id,
       'task_color'=>$request->task_color,
       'label'=>$request->label_data,
       'stage'=>$request->stage
    ]);
       if(!$created){
        // dd('error');
        return back()->with('error', "Fail to create task");
       }
       return back()->with('success', "Task created successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
    $show = Task::where('project_id',1);
    $labels=  $show->pluck('label');
  
    $labels=  json_decode($labels)[0] ?? null;
    $task_id=  $show->pluck('id')[0] ??null;
    $show = $show->get();
    // dd(json_decode($labels));
    $assigned_people= AssignedTask::select('users.name')
    ->join('users','assigned_tasks.user_id','=','users.id')
    ->where('task_id', $task_id )->get();
        return view('task.show',compact('show' ,'assigned_people' ,'labels'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}

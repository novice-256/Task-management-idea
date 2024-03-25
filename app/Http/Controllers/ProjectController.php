<?php

namespace App\Http\Controllers;

use App\Events\TaskEvents;
use App\Models\Project;
use App\Models\ProjectStage;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AssignedTask;
use App\Models\Labels;

class ProjectController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'project_name' => 'required|string|max:255',
            'thumbnail' => 'nullable|string|max:255',
            'bg_color' => 'nullable|string|max:50',
            'task_limit' => 'nullable|integer',
            'user_role_id' => 'nullable|integer',
            'stages'=>'required'
        ]);

        $project = Project::create([
            'user_role_id' => $data['user_role_id'],
            'project_name' => $data['project_name'],
            'thumbnail' => $data['thumbnail'] ?? 'project-thumbnail.png',
            'bg_color' => $data['bg_color'],
            'task_limit' => $data['task_limit'],
            'created_by' =>Auth::user()->role_id,
        ]);

        if (!$project) {
            return back()->with('error','Failed to Create Resource');
        }
        $project = Project::select('id')->where('project_name', $data['project_name'])->first();
        $curr_project = $project->id;
        $stages_arr =explode( ",",$data['stages'] );
        foreach ($stages_arr as $stage ) {
           ProjectStage::insert([
            'name'=>$stage,
            'project_id'=> $curr_project
           ]);
        }
        return back()->with('success','Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project ,$id)
    {

        $task = Task::select('tasks.*', 'tasks.id as task_id', 'users.id as user_id', 'users.name', 'assigned_tasks.id as assign_id')
        ->leftJoin('assigned_tasks', 'assigned_tasks.task_id', '=', 'tasks.id')
        ->leftJoin('users', 'assigned_tasks.user_id', '=', 'users.id')
        ->where('project_id', $id)
        ->get();
    $labels = Labels::select('labels.*', 'labels.id as label_id', 'tasks.id as task_id')
        ->leftJoin('tasks', 'labels.task_id', '=', 'tasks.id')
        ->where('tasks.project_id', $id)
        ->get();
    $assignedTaskMembers = AssignedTask::select('assigned_tasks.*', 'tasks.id as task_id', 'users.id as     user_id', 'users.name')
        ->leftJoin('tasks', 'assigned_tasks.task_id', '=', 'tasks.id')
        ->leftJoin('users', 'assigned_tasks.user_id', '=', 'users.id')
        ->where('tasks.project_id', $id)
        ->get();
    $project = Project::where('id','=',$id)->first();
    $stages= ProjectStage::where('project_id',$id)->get();

        return view('project.show',compact('project','stages','task','labels','assignedTaskMembers'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}

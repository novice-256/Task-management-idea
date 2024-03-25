<?php

namespace App\Http\Controllers;

use App\Events\TaskEvents;
use App\Models\Project;
use App\Models\ProjectStage;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AssignedTask;
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
        // dd($stages_arr);
        return back()->with('success','Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project ,$id)
    {
        
    $show = Task::where('project_id',$id);
    $labels=  $show->pluck('label')??null;

    $labels=  json_decode($labels)[0] ?? null;
    $task_id=  $show->pluck('id')[0] ??null;
    $show = $show->get();
    $assigned_people= AssignedTask::select('users.name')
    ->join('users','assigned_tasks.user_id','=','users.id')
    ->where('task_id', $task_id )->get();
    $project = Project::where('id','=',$id)->first();
    $stages= ProjectStage::where('project_id',$id)->get();    
     $task= Task::where('project_id',$id)->get();
        // TaskEvents::dispatch($task);
        return view('project.show',compact('show' ,'assigned_people' ,'labels','project','stages' ,'task'));

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

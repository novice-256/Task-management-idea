<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function task_store(Request $request)
    {
       $validate= $request->validate([
        'stage_id'=> 'required',
        'project_id'=>'required',
        'task_title'=>'required|unique:tasks,task_name',
        ]);
        
        $task_created = Task::create([
            'task_name'=> $validate['task_title'],
            'project_id'=> $validate['project_id'],
            'stage_id'=> $validate['stage_id'],
            'assigned_by'=> Auth::user()->id,
        ]);
        if(!$task_created){
         return response()->json(['error' => 'unable to create task']);
            
        }
        return response()->json(['success' => 'task created successfully']);

    }
    public function task_move(Request $request)
    {
        return response()->json(['message' => 'task moved successfully']);
        
    }
    public function task_cards_show($id)  {
        $task = Task::where('project_id',$id);
        return response()->view('project.card.task_cards',compact($task));
        
    }
}

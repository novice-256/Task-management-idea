<?php

namespace App\Http\Controllers;

use App\Models\ProjectStage;
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
        $task_color =$request->task_color ?? 'white';
        $task_created = Task::create([
            'task_name'=> $validate['task_title'],
            'project_id'=> $validate['project_id'],
            'stage_id'=> $validate['stage_id'],
            'assigned_by'=> Auth::user()->id,
            'task_color'=> $task_color
        ]);
        if(!$task_created){
         return response()->json(['error' => 'unable to create task']);

        }
        return response()->json(['success' => 'task created successfully']);

    }
    public function task_move(Request $request,$id)
    {
        $update_stage= Task::where('id', $id)
                        ->update(['stage_id'=>$request->taskStage]);
        if(!$update_stage){
        return response()->json(['error' => 'fail to  move task']);

        }

        return response()->json(['message' => 'task moved successfully']);


    }
    public function task_cards_show($id)  {
        $task = Task::where('project_id',$id);
        return response()->view('project.card.task_cards',compact($task));

    }
    public function stage_delete($id)  {
        Task::where('stage_id',$id)->delete();
        $stage = ProjectStage::find($id)->delete();
        if(!$stage ){
            return response()->json(['error' => 'unable to delete project']);

           }
           return response()->json(['success' => 'project delete successfully']);

    }
    public function stage_store(Request $request)  {

        $validate= $request->validate([
            'project_id'=>'required',
            'stage_title'=>'required'
            ]);

            $stage_created = ProjectStage::insert([
                'project_id'=> $validate['project_id'],
                'name'=> $validate['stage_title'],
            ]);
            if(!$stage_created){
             return response()->json(['error' => 'unable to create task']);

            }
            return response()->json(['success' => 'task created successfully']);

    }
    public function stage_update(Request $request,$id)  {
        // Task::where('stage_id',$id)->delete();
        $stage = ProjectStage::where('id',$id)
                ->update(['name'=>$request->stageName]);
        if(!$stage ){
            return response()->json(['error' => 'unable to update project']);

           }
           return response()->json(['success' => 'stage updated successfully']);

    }
}

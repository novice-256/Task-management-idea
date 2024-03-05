<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return back()->with('success','Created Successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        
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

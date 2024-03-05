<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $show = Project::get();
        $show_my_project = Project::select('projects.*','users.id','users.name as user_name','user_roles.*')
                    ->join('user_roles','user_roles.id','=','projects.user_role_id')
                    ->join('users','users.role_id','=','projects.user_role_id')
                        ->get();
        // dd($show ,$show_my_project);
        return view('home.show',compact('show','show_my_project'));
        
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

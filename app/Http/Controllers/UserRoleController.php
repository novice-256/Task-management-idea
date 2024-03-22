<?php

namespace App\Http\Controllers;

use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserRoleController extends Controller
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
        $validate = $request->validate([
            'name' => 'required|string|max:255'
        ]);
        $create_role =UserRole::create(
           [ 'name'=> $validate['name']]

        );
        if(!$create_role ){
            Session::flash('error', 'fail to create Role!');
            return redirect()->back();
        }
        Session::flash('success', 'Role created successfully!');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(UserRole $userRole)
    {
        $show = UserRole::get();
        return view('role.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserRole $userRole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserRole $userRole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserRole $userRole ,$id)
    {
       $role =  UserRole::find($id);
       $delete_role= $role->delete();
       if(!$delete_role){
        Session::flash('error', 'fail to delete Role!');
        return redirect()->back();
    }
    Session::flash('success', 'Role delete successfully!');
    return redirect()->back();
    }
}

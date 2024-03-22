<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
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
    public function create(){
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'role_id' => 'required',
        ]);
        // dd($validatedData['role_id']);
        $create_user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role_id' => $validatedData['role_id'],
        ]);
        if(!$create_user ){
            Session::flash('error', 'fail to create User!');
            return redirect()->back();
        }
        Session::flash('success', 'User created successfully!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */

    public function show(User $user)
    {
        $show = User::select('users.*','user_roles.name as role')
                ->join('user_roles','user_roles.id','=','users.role_id')
                ->get();
        $role = UserRole::pluck('name','id');
        return view('user.show',compact('show','role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $create_user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}

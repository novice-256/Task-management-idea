<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        // Validate incoming data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            // 'role_id' => 'required|exists:roles,id',
            'role_id' => 'required',
        ]);

        // Insert data into the database
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->role_id = $validatedData['role_id'];
        $user->save();

        // Success message
        Session::flash('success', 'User created successfully!');

        // Redirect back to the form or any other route
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */

    public function show(User $user)
    {
        $show = User::get();
        return view('user.show',compact('show'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // register
    public function registerUser(Request $request) {
    

        // validate the input data
        $data = request()->validate([
            'email' =>'required|email|unique:users',
            'password' => 'required|min:6',
            'first_name' =>'required|string|max:255',
            'last_name' =>'required|string|max:255'
        ]);


        // insert the data
        $user = User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name']
        ]);


        // return the user back to previous page
        return redirect()->back()->with('success', 'User created successfully');
    }

    public function login(Request $request) {
        dd($request);
    }
}

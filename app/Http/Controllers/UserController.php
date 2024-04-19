<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // store a new user
    public function store(Request $request)
    {
        // simple validation for registerign a user
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:joomla_db.users,username',
            'email' => 'required|string|email|max:255|unique:joomla_db.users,email',
            'password' => 'required|string|min:6'
        ]);
        $user = DB::connection('joomla_db')->table('users')->insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'params' => "{}"
        ]);
        return redirect('/signin')->with('success', 'User created successfully');
    }
}

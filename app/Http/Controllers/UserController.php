<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // get all users
    public function index()
    {
        $users = DB::connection('joomla_db')->table('users')->get();
        return view('welcome', ['users' => $users]);
    }
    // store a new user
    public function store(Request $request)
    {
        $user = DB::connection('joomla_db')->table('users')->insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'params' => "{}"
        ]);
        return redirect('/');
    }
}

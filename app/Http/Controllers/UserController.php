<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // store a new user
    public function store(Request $request)
    {
        $user = DB::connection('joomla_db')->table('users')->insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'params' => "{}"
        ]);
        return redirect('/signup');
    }
}

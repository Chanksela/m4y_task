<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoomlaUserAuth extends Controller
{
    // sign in user
    public function signIn(Request $request)
    {
        $credintials = $request->only('email', 'password');
        $user = DB::connection('joomla_db')->table('users')->where('email', $credintials['email'])->first();

        if($user && password_verify($credintials['password'], $user->password)) {
            session(['joomla_authenticated' => true]);
            auth()->loginUsingId($user->id);
            return redirect('/dashboard');
        }
        return redirect('/signin')->with('error', 'Invalid email or password');
    }
    public function signOut()
    {
        session()->forget('joomla_authenticated');
        auth()->logout();
        return redirect('/signin');
    }
}

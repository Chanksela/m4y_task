<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoomlaUserAuth extends Controller
{
    // sign in user
    public function signIn(Request $request)
    {
        $credintials = $request->only('email', 'password');

        $user = DB::connection('joomla_db')->table('users')->where('email', $credintials['email'])->first();

        $validated = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6'
        ]);

        if($user && password_verify($credintials['password'], $user->password)) {
            session(['joomla_authenticated' => true]);
            session(['user_name' => $user->name]);
            auth()->loginUsingId($user->id);
            return redirect('/dashboard');
        }
        return redirect('/signin')->with('error', 'Invalid email or password');
    }
    public function signOut()
    {
        session()->forget('joomla_authenticated');
        session()->forget('user_name');
        auth()->logout();
        return redirect('/signin');
    }
}

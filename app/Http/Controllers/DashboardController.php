<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $userName = session('user_name');
        $users = DB::connection('joomla_db')->table('users')->get();

        return view('dashboard', ['users' => $users, 'userName' => $userName]);
    }
}

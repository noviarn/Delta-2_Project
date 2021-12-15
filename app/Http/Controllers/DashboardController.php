<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    //
    public function home()
    {
        $user_id = Auth::id();
        $user_data = \App\Models\User::where('email', $user_id)
               ->get();

        $data_history = \App\Models\History::where('user_id', $user_id)
                ->first();

        return view('dashboard', compact('user_data', 'data_history'));
    }

    public function datakerusakan()
    {
        $user_id = Auth::id();
        $user_data = \App\Models\User::where('email', $user_id)
               ->get();

        return view('datakerusakan', compact('user_data'));
    }

    public function profile()
    {
        $user_id = Auth::id();
        $user_data = \App\Models\User::where('email', $user_id)
               ->get();
               
        return view('profile', compact('user_data'));
    }
}

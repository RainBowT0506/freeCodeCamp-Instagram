<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($user)
    {
        // dd($user);
        $user = User::find($user);
        // dd($user);
        return view('home');
    }
}

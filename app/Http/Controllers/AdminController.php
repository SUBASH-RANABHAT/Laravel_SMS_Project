<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::get();
        // return view('Backend.admin.login', [
        //     'data' => $user
        // ]);
        return view('Backend.admin.login', compact('user'));
    }
}

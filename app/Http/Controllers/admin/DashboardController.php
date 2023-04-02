<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $student = Student::count();
    return view('Backend.admin.dashboard', compact('student'));
    }
}

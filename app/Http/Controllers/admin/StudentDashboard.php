<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentDashboard extends Controller
{
    public function index()
    {
        return view('Backend.admin.student_dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Teacher;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTeacherRequest;
use App\Models\SchoolClass;

class TeachersController extends Controller
{
    public function __construct(Teacher $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return view('Backend.teacher.index');
    }

    public function store(StoreTeacherRequest $req)
    {
        foreach ($req->inputs as $key => $value) {
            Teacher::create($value);
        }
        $teacher = Teacher::all();
        return view('Backend.teacher.view', compact('teacher'));

        // $teacher = $this->model->create([
        //     'name' => $req->name,
        //     'category' => $req->category,
        //     'reg_no' => $req->Reg_no,
        //     'qualification' => $req->qualification,
        //     'education' => $req->education,
        //     'experience' => $req->experience,
        // ]);
        // return view('Backend.teacher.view')->with('teacher', $teacher);
    }

    public function view(Request $req)
    {
        $search = $req['search'] ?? "";
        if ($search != "") {
            $teacher = Teacher::where('name', '=', $search)->get();
        } else {
            $teacher = $this->model->get();
        }
        return view('Backend.teacher.view', compact('teacher', 'search'));
    }

    public function delete($id)
    {
        $teacher = $this->model->get();
        $delete = Teacher::find($id);
        if ((!is_null($delete))) {
            $delete->delete();
            // return view('Backend.teacher.view', compact('teacher'));
            return redirect()->back();
        }
    }


    public function edit($id)
    {
        $find = Teacher::find($id);
        return view('Backend.teacher.update', ['find' => $find]);
    }

    public function update(Request $req)
    {
        $data = $this->model->get();
        $resource = Teacher::find($req->id);
        $resource->name = $req->name;
        $resource->email = $req->email;
        $resource->password = $req->password;
        $resource->password_confirmation = $req->password_confirmation;
        $resource->save();
        return view('Backend.teacher.view')->with('data', $data);;
    }

    public function showDropdown()
    {
        // $names = DB::table('teachers')->get();
        $names = Teacher::pluck('name', 'teacher_id')->prepend('Select Teacher', '');
        $class_no = SchoolClass::pluck('class', 'class_id')->prepend('Select Class', '');
        return view('Backend.teacher.relation', [
            'class_no' => $class_no,
            'names' => $names
        ]);
    }
}

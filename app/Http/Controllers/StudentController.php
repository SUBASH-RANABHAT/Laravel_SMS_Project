<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorStudentRequest;
use App\Http\Requests\StudentLoginRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{

    public function __construct(Student $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return view('Backend.students.student');
    }

    public function storeStudent(StorStudentRequest $request)
    {
        $student = $this->model->create([
            'name' => $request->name,
            'email' => $request->email,
            'roll_no' => $request->roll_no,
            'password' => $request->password,
        ]);
        if (isset($request->image)) {
            $file = $request->image;
            $path = storage_path() . '/app/student/' . $student->id . '/';
            $name = $file->getClientOriginalName();
            $file->move($path, $name);
            $request->image = '/student/' . $student->id . '/' . $name;
            $student->update([
                'image' => $request->image
            ]);
        }
        return redirect()->back()->with('message', "Student Registered Successfully");
    }

    public function post()
    {
        $posts = $this->model->paginate(4);
        return view('Backend.student_details', compact('posts'));
    }

    public function delete($id)
    {
        $posts = Student::all();
        $student_u = Student::find($id);
        if ((!is_null($student_u))) {
            $student_u->delete();
        }
        return view('Backend.student_details', compact('posts'));
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('Backend.students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $students = $this->model->get();
        $student->name = $request->name;
        $student->roll_no = $request->roll_no;
        $student->email = $request->email;
        $student->password = $request->password;


        if (isset($request->image)) {
            unlink(storage_path() . '/app' . $student->image);
            $file = $request->image;
            $path = storage_path() . '/app/student/' . $id . '/';
            $name = $file->getClientOriginalName();
            $file->move($path, $name);
            $unlink = storage_path() . '/app/student/' . $id . '/' . $name;
            $request->image = '/student/' . $id . '/' . $name;
            $student->image = $request->image;
        }

        $student = $student->update();

        return view('Backend.student_details', [
            'posts' => $students
        ])->with('message', 'Student Updated Successfully');
    }


    public function login()
    {
        return view('Backend.students.student_login');
    }


    public function check(StudentLoginRequest $request)
    {
        // dd('asdasd');
        // dd($req);
        // $student = Student::where('email', '=', $req->email)->first();
        // if (!$student) {
        //     return redirect()->back()->with('fail', "Cannot match your credentials");
        // } else {
        //     if (Hash::check($req->password, $student->password)) {
        //         $req->session()->put('LoggedUser', $student->id);
        //     } else {
        //         return back()->with('fail', 'Incorrect password');
        //     }
        // }
    }
}
